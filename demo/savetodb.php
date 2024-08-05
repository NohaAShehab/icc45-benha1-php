<?php

    require '../utils.php';
    require 'db_utils.php';
    generate_title("Data received");

    var_dump($_POST);





    /************* before saving the user I need to make sure that he has filled all the data ******************/

    $errors = [];
    $old_data= [];
    if(empty($_POST['name'])){
        $errors['name'] = "Name is required";
    }else{
        $old_data['name'] = $_POST['name'];
    }

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

    if(empty($_FILES['image']['tmp_name'])){
        $errors['image'] = "Image is required";
    }else{
        $ext= pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        var_dump($ext);
        if( ! in_array($ext, ["jpg", "jpeg", "png"])){
            $errors['image'] = "Only JPG, JPEG, PNG files are allowed";
        }

    }
    if($errors){
        generate_title("Error you need to fill all fields", 1,'red');

        # serialize array to string
        $errors= json_encode($errors);
        $url = "Location: register_form.php?errors={$errors}";
        if($old_data){
            $old_data = json_encode($old_data);
            $url.="&old_data={$old_data}";
        }
        header($url);
    }else {

        $img_time= time();
        # get file info --> save it to the server
        $temp_name = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_path="images/{$img_time}.{$ext}";
        $saved=move_uploaded_file($temp_name,$image_path);
        if($saved){
            generate_title("Image uploaded successfully",1,'green');

        }else{
            generate_title("Error uploading file",1,'red');
        }

        # prepare data_to_be_save_on_server

        ######
        generate_title('Connect to database ');


        ## open connection
        var_dump($db);
        # insert data ?
        try{
            $inst_query = "insert into `users`(`name`,`email`,`password`,`image`)
                    values (:username,:useremail,:userpassword,:userimage)";
            $inst_stmt = $db->prepare($inst_query);
            $inst_stmt->bindParam(':username', $_POST['name']);
            $inst_stmt->bindParam(':useremail', $_POST['email']);
            $inst_stmt->bindParam(':userpassword', $_POST['password']);
            $inst_stmt->bindParam(':userimage', $image_path);
            $inst_stmt->execute();
            if($db->lastInsertId()){
                generate_title("Database inserted successfully",1,'green');
                header("Location: data_table.php");
            }

        }catch(PDOException $e){
            generate_title("Error in inserting database {$e->getMessage()}",1,'red');
        }







    }