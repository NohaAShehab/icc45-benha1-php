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
        <th>Image</th>
        <th>Delete</th>
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
        for($i=0; $i<count($user_info)-1; $i++){
            echo '<td>'.$user_info[$i].'</td>';
        }

        echo "<td> <img src='{$user_info[$i]}' width='200' height='200'>  </td>";

        echo "<td><a href='' class='btn btn-danger'>Delete</a></td>
<tr>";


    }
}

echo "</table>";
echo "<a class='btn btn-primary' href='register_form.php'> Add new User </a>";