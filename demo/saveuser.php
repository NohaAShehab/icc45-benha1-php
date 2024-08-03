<?php

    require '../utils.php';
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

        # prepare data_to_be_save_on_server

        $old_id = file_get_contents('ids.txt');
        var_dump($old_id);
        $old_id = (int)$old_id;
        $id = $old_id + 1;
        file_put_contents('ids.txt', $id);

        $data = "{$id}:{$_POST['name']}:{$_POST['email']}:{$_POST['password']}\n";

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