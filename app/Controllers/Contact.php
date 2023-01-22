<?php
namespace App\Controllers;
use App\Models\ContactModel;

class Contact extends BaseController{
    public function index(){
        $session = \Config\Services::session();
        $data['session']=$session;
        return view('phonebook/index', $data);
    }
    public function add(){
        $session = \Config\Services::session();
        helper('form');
        $data=[];

        if($this->request->getMethod()=='post'){
            // form validation 
            $input = $this->validate([
                'name'=>'required|min_length[3]',
                'mobile'=>'required|min_length[10]',
            ]);

            if($input== true){
                // form validated successfully
                $model = new ContactModel();
                $model->save([
                    'name'=>$this->request->getPost('name'),
                    'mobile'=>$this->request->getPost('mobile'),
                ]);
                    $session->setFlashdata('success','Contact has been added.');
                    return redirect()->to('/');
            }else{
                // form not validated
                $data['validation']=$this->validator;
            }
        }

        return view('phonebook/add',$data);
    }
}

?>