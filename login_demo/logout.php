<?php

require '../utils.php';


# start session
session_start();
if($_SESSION['login']){
    $_SESSION= array();
    session_destroy();

    generate_title("Logged out",1, 'blue');


}else{
    session_destroy();
    generate_title("You are a guest",1, 'red');

}
echo "<a href='login.php' class='btn btn-primary'>Login again</a>";