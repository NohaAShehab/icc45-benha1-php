<?php

    require 'utils.php';
    generate_title("Welcome to registeration page");

    # get data sent from client

    # $_REQUEST

//    echo $_REQUEST;  # $_REQUEST ==> array

    print_r($_REQUEST);

    var_dump($_REQUEST);

    generate_title('$_GET');
    var_dump($_GET);

    generate_title('$_POST');
    var_dump($_POST);

    generate_title("Access form variables");
    echo "Password = {$_POST['password']}";


