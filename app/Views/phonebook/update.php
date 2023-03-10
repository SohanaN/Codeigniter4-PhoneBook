<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=base_url('/'); ?>">Ci4 PhoneBook</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=base_url('/'); ?>">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url('add'); ?>">Add Contact</a>
        </li>
      </ul>      
    </div>
  </div>
</nav>

<div class="container p-4">

    <h6 class="text-center">Update Contact</h6>

    <form method="post" >
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control <?=(isset($validation)&& $validation->hasError('name'))?'is-invalid':''?>" id="name" name="name" value="<?=set_value('name', $contact['name'])?>" placeholder="Contact name">
    
    <?php
        if(isset($validation)&& $validation->hasError('name')){
            echo $validation->getError('name');
        }
    ?>
  </div>
  <div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="text" class="form-control <?=(isset($validation)&& $validation->hasError('name'))?'is-invalid':''?>" id="mobile" name="mobile" value="<?=set_value('mobile',$contact['mobile'])?>" placeholder="Mobile">

    <?php
        if(isset($validation)&& $validation->hasError('mobile')){
            echo $validation->getError('mobile');
        }
    ?>
  </div>  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>
</div>
</body>
</html>