<?php

require '../utils.php';
require '../credits.php';
require 'connect_oop.php';

generate_title("Connect to database use oop mysqli ");

$conn = connect_to_db($db_name,  $db_user, $db_pass, $db_host, $db_port);


# insert
$name ='nha';
$email = 'noha@gaill.com';
$password = 'iti';

# insert query to insert this values ??
function basic_insert($conn)
{
    try {
        $inst_query = "Insert into `users`(`name`, `email`,`password`) values('{$name}','{$email}','{$password}')";
        var_dump($inst_query);
        $res = $conn->query($inst_query);

        var_dump($res);
        $id = $conn->insert_id;
        generate_title("inserted with id= {$id}", 1, 'green');

    } catch (Exception $e) {
        generate_title($e->getMessage(), 1, 'red');

    }
}

generate_title("prepared statement with ? placeholder");

############3 best practice ---> prepared statement

try{
    $inst_query = "Insert into `users`(`name`, `email`,`password`) values(?,?,?)";
    $stmt = $conn->prepare($inst_query);  # send query to mysql
    var_dump($stmt);

    ### then send data to the query
    # bind type s --> for string , i for integer
    $stmt->bind_param('sss', $name, $email, $password);
    $res = $stmt->execute();
    var_dump($res);

    $id= $conn->insert_id;
    generate_title("inserted with id= {$id}",1,'green');

}catch(Exception $e){
    generate_title($e->getMessage(), 1,'red');

}













