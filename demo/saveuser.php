<?php

    require '../utils.php';
    generate_title("Data received");

    var_dump($_POST);

    generate_title("upload image :::");
    # info about uploaded files --> $_FILES
    print_r($_FILES);



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
//      $info=  pathinfo($_FILES['image']['name']);
//      var_dump($info['extension']);
        # validate extension
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
        # get file info --> save it to the server
        $temp_name = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $image_path="images/{$image_name}";
        $saved=move_uploaded_file($temp_name,$image_path);
        if($saved){
            generate_title("Image uploaded successfully",1,'green');
            echo "<img src='images/{$image_name}' width='100' height='100'> ";

        }else{
            generate_title("Error uploading file",1,'red');
        }

        # prepare data_to_be_save_on_server

        $old_id = file_get_contents('ids.txt');
        var_dump($old_id);
        $old_id = (int)$old_id;
        $id = $old_id + 1;
        file_put_contents('ids.txt', $id);

        $data = "{$id}:{$_POST['name']}:{$_POST['email']}:{$_POST['password']}:{$image_path}\n";

        # save data to the file
        $filobj = fopen("users.txt", 'a');
        if (is_resource($filobj)) {
            fwrite($filobj, $data);
            fclose($filobj);
            generate_title("DataSaved", 1, 'green');
            # redirect to another page ---> 302
            header('Location: data_table.php');
        }

    }