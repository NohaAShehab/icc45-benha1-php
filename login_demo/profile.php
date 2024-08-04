<?php
require '../utils.php';
# 1-open session

session_start();

if($_SESSION['login']===true){
    generate_title("Welcome {$_SESSION['email']}", 1,'green');

}else{
    generate_title("Please login ",1, 'red');
    # to destroy session
    $_SESSION =[];
    session_destroy();
    header('Location: login.php');
}