<?php


require "../utils.php";
require 'db_utils.php';

print_r($_GET);

$id = $_GET["id"];
if($id && $db){
        try{
            $select_query = "select * from `users` where id=:id";
            $stmt =$db->prepare($select_query);
            $stmt->bindParam(":id",$id,PDO::PARAM_INT);
            $stmt->execute();
            $obj = $stmt->fetch(PDO::FETCH_ASSOC);
            $img_path = $obj["image"];
            if(file_exists($img_path)){
                unlink($img_path);
            }
            # delete associated image if exists


            $delete_query = "Delete from `users` where id=:userid";
            $stmt = $db->prepare($delete_query);
            $stmt->bindParam(":userid", $id, PDO::PARAM_INT);
            $stmt->execute();


            header("Location: data_table.php");
        }catch (PDOException $e){
            echo $e->getMessage();
        }

}

