<?php

function connect_to_db($db_name, $db_user, $db_pass, $db_host, $db_port){
    try {
        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name,$db_port);
//        var_dump($conn);
    }catch(Exception $e){
        var_dump( $e->getMessage());
        return false;
    }

    return $conn;


}
