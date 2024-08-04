<?php

    require '../utils.php';
    generate_title("Data received");

    var_dump($_POST);




    /************* before saving the user I need to make sure that he has filled all the data ******************/

    $errors = [];
    $old_data= [];


    if(empty($_POST['email'])){
        $errors['email'] = "Email is required";
    }else{
        $old_data['email'] = $_POST['email'];
    }

    if(empty($_POST['password'])){
        $errors['password'] = "Password is required";
    }else{
//        $old_data['password'] = $_POST['password'];
    }


    if($errors){
        generate_title("Error you need to fill all fields", 1,'red');

        # serialize array to string
        $errors= json_encode($errors);
        $url = "Location: loginform.php?errors={$errors}";
        if($old_data){
            $old_data = json_encode($old_data);
            $url.="&old_data={$old_data}";
        }
        header($url);
    }else {

       var_dump($_POST);
       $email = $_POST['email'];
       $password = $_POST['password'];
       $users = ['ahmed@gmail.com', 'noha@gmail.com', 'abc@gmail.com'];
       if (in_array($email, $users) && $password==='iti') {

           generate_title("Logged in successfully",1,'green');
           session_start();
           $_SESSION['email'] = $email;
           $_SESSION['login'] = true;

           header('Location: profile.php');
       }else{
           generate_title("Logged in unsuccessfully",1,'red');
       }

    }