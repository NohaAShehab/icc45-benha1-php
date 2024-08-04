<?php

    session_start();
    if($_SESSION['login']){
        header("location:profile.php");
    }else{
        session_destroy();

    }

  if(isset($_GET['errors'])){
      $errors = json_decode($_GET['errors'],true);
  }
  if(isset($_GET['old_data'])){
      $old_data = json_decode($_GET['old_data'],true);
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Login form </h1>
    <div class="container">

        <form action="loginuser.php" method="post" enctype="multipart/form-data">


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email"
                       value="<?php $eval=isset($old_data['email'])?$old_data['email']:"";echo $eval;?>"
                       class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                <span class="text-danger">
                    <?php $emailerror=isset($errors['email'])? $errors['email']: ''; echo $emailerror; ?>
                </span>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password"
                       value="<?php $pval=isset($old_data['password'])?$old_data['password']:"";echo $pval;?>"

                       class="form-control" id="exampleInputPassword1">

                <span class="text-danger">
                    <?php $passerror=isset($errors['password'])? $errors['password']: ''; echo $passerror; ?>
                </span>
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>