<?php

    $db_name = 'php_banha';
    $db_host = 'localhost';
    $db_user = 'benha';
    $db_pass = 'Iti123456789_';
    $db_port = '3306';

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

    $db = connection_using_pdo($db_host, $db_user, $db_pass, $db_name);