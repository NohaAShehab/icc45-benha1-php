<?php

    require '../utils.php';
    generate_title("Data received");

    var_dump($_POST);

    # prepare data_to_be_save_on_server

    $old_id= file_get_contents('ids.txt');
    var_dump($old_id);
    $old_id = (int)$old_id;
    $id = $old_id +1;
    file_put_contents('ids.txt', $id);

    $data="{$id}:{$_POST['name']}:{$_POST['email']}:{$_POST['password']}\n";

    # save data to the file
    $filobj = fopen("users.txt", 'a');
    if(is_resource($filobj)){
        fwrite($filobj, $data);
        fclose($filobj);
        generate_title("DataSaved", 1,'green');
        # redirect to another page ---> 302
        header('Location: data_table.php');
    }