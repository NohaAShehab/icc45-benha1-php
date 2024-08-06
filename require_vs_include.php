<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//include 'utils.php';
//generate_title("abc");

//require 'utils.php';
//generate_title("dataa");

//require "iti.php"; # if mand. to load file
//echo "hi";

include("config.php"); # if not exists --> won't raise error
echo "bye";