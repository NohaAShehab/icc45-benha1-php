<?php

require '../utils.php';

# read data from file ??

$users = file('users.txt');
echo "<h1>All users</h1>";
if ($users){

    echo "<table class='table'> 
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
     </tr>
";
//    print_r($users);
    foreach ($users as $user){
        # remove new line ??
        $user = trim($user);
        #split string to an array
        $user_info = explode(":", $user);
//        var_dump($user_info);
        echo "<tr>";
        foreach ($user_info as $info) {
            echo "<td> {$info} </td>";
        }
        echo "<tr>";


    }
}