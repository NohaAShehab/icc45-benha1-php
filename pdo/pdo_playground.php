<?php
    require_once '../utils.php';
    require_once '../credits.php';
    require 'pdo_conn.php';

    $db = connection_using_pdo($db_host, $db_user, $db_pass, $db_name);
//    var_dump($db);

### do operations ??


function insert($db){
    $inst_query = "Insert into `users`(`name`,`email`, `password`) values(?,?,?);";
    # 1- prepare the statemnt
    $stmt = $db->prepare($inst_query);
    var_dump($stmt);
    # bind params to the statemnt ?
    $name= 'ali';
    $email = 'ali@gmail.comm';
    $password = '123';
    $res=$stmt->execute([$name, $email, $password]);
    var_dump($res); # true
    #get no of rows
    var_dump($db->lastInsertId()); # id of the inserted row
    var_dump($stmt->rowCount());


}

//insert($db);

generate_title("---> prepared statement using : placeholder");

function insert_colon_placeholder ($db){
    $inst_query = "Insert into `users`(`name`,`email`, `password`) 
        values(:username, :useremail, :userpassword);";

    $inst_stmt = $db->prepare($inst_query);
    var_dump($inst_stmt);

    # bind data
    $name='nohashehab';
    $email='nohashehab@gmiail.com';
    $password = 'iti';
    $inst_stmt->bindParam(':username', $name, PDO::PARAM_STR); # 'nohashehab'
    $inst_stmt->bindParam(':useremail', $email);
    $inst_stmt->bindParam(':userpassword', $password);
    $res = $inst_stmt->execute();
    var_dump($res);
    var_dump($db->lastInsertId());
    var_dump($inst_stmt->rowCount());



}
//insert_colon_placeholder($db);

function update ($db){
    try {
        $update_query = "update `users` set `password`=:anypassword where `id`=:anyid";
        $update_stmt = $db->prepare($update_query);
        $password = 123;
//        $id = 6;
        $update_stmt->bindParam(':anypassword', $password, PDO::PARAM_STR);
//        $update_stmt->bindParam(':anyid', $id, PDO::PARAM_INT);
        $update_stmt->bindValue(':anyid', 7, PDO::PARAM_INT);

        $res = $update_stmt->execute();
        if ($update_stmt->rowCount() > 0) {
            generate_title("Update successfully", 1, 'green');
        } else {
            generate_title("No changes", 2, 'blue');
        }
    }catch (Exception $e){
        generate_title($e->getMessage(), 1, 'red');
    }


}

//update($db);


### select
generate_title("----Select");
function select($db){

    try{
        $select_query = "select * from `users`;";
        $stmt = $db->prepare($select_query);
        $res = $stmt->execute();
        var_dump($stmt->rowCount());
        var_dump($res);
        # fetch data

//        $rows = $stmt->fetchAll();
//        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC); # fetch rows as associative array
//        $rows = $stmt->fetchAll(PDO::FETCH_OBJ); # fetch rows as associative array

//        print_r($rows);
        # fetch single row ?
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($row);
        $row= $stmt->fetch(PDO::FETCH_OBJ);
        var_dump($row);


    }catch (PDOException $e){
        generate_title($e->getMessage(), 1, 'red');
    }

}

select($db);








