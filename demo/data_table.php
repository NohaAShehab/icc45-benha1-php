<?php

require '../utils.php';
require 'db_utils.php';
echo "<a class='btn btn-primary' href='register_form.php'> Add new User </a>";
# read data from file ??
if($db){
    try{
        $select_query = "Select * from users;";

        $stmt = $db->prepare($select_query);
        $res = $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        generate_title($e->getMessage(),1, 'red');
    }
}

echo "<h1>All users</h1>";
if ($users){

    echo "<table class='table'> 
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Image</th>
        <th>Delete</th>
     </tr>
";
    foreach ($users as $user){
        echo "<tr>
            <td>{$user['id']}</td>
            <td>{$user['name']}</td>
            <td>{$user['email']}</td>
            <td>{$user['password']}</td>
            <td><img src='{$user['image']}' width='100' height='100'></td>
            <td><a href='delete.php?id={$user['id']}' class='btn btn-danger'>Delete </a> </td>
        </tr>";
    }
}

echo "</table>";
