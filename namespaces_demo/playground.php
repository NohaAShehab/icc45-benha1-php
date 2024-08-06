<?php
require '../utils.php';
require 'base.php';
require 'config.php';
# I need to get class from the namespace
//use basefile\Student as MyStudent;
//$s = new Student("rr");
//print_r($s);
//$s2 = new Student("rr");
//print_r($s2);

use basefile\Student as StudentBase;
use config\Student as StudentConfig;

$student = new StudentBase();
print_r($student);


$std= new StudentConfig("jj");
print_r($std);
