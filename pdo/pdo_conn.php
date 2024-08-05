<?php


    function connection_using_pdo($db_host, $db_user, $db_pass, $db_name){
       try {
           $dsn = "mysql:host={$db_host};dbname={$db_name};";
           $pdo = new PDO($dsn, $db_user, $db_pass);
           var_dump($pdo);

       }catch (PDOException $e){
           var_dump($e->getMessage());
           return false;
       }
        return $pdo;

    }