<?php


include("../utils.php");

generate_title("Sessions");
print_r($_SESSION);

generate_title("I need to start session ");
session_start(); #must be called if you need to use sessions

print_r($_SESSION);
$_SESSION['name']='Mahmoud Tantway';
$_SESSION['track']='PHP';