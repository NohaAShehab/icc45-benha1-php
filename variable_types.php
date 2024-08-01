<?php

    require 'utils.php';
    generate_title("Type casting", 1, 'Green');

    $num = 10;
    var_dump($num);
    $num = (float) $num;
    var_dump($num);
    ####
    $name = 'iti';
    $name = (int)$name;
    var_dump($name);
    ####
    $name = '88iti';
    $name = (int)$name;
    var_dump($name);
    ###
    $name = 'iti88';
    $name = (int)$name;
    var_dump($name);

    generate_title("Variable of variable");
    $name = "iti";
    $iti = "Information Tech. Institute.";

    var_dump($name);
    var_dump($$name);
    var_dump($$$name);

    generate_title("Operators", 1, 'red');

$firstname='noha';
$lastname ='shehab';
$fullname = $firstname.' '.$lastname;
var_dump($fullname);


//$res = $firstname + $lastname;
//var_dump($res);  # fetal error


//$res = $firstname + 10;
//var_dump($res);


$x = 10;
$y = 50;
var_dump($x <=> $y);


/**
 * spaceship operator
 *  $a <=> $b
 *  --> 1 if a> b
 * ---> 0  if a===b
 * ---> -1 a < b
 */

generate_title("Reference operator", 1, 'blue');

 $a = 10;
 $b = $a;  # copy the value (deep copy)
 var_dump($a, $b);
 $b = 55;
 var_dump($a, $b);


 # shallow copy

$x = 100;
$y = &$x;
var_dump($x, $y);
$y= 'updated';
var_dump($x,$y);


generate_title("instance of ");

class SampleClass{};

$s = new SampleClass();
var_dump($s);

var_dump( $s instanceof SampleClass);
var_dump('10' instanceof SampleClass);

generate_title("errors operators");


//$b= @(44/0);
//var_dump($b);


generate_title("Execution operator");

$res  =`ls -l`; # execute the command
var_dump($res);

$folder = `mkdir abc`;

generate_title("variables functions", 1, 'purple');

$num = 10;
var_dump(gettype($num));

settype($num, 'float');
var_dump($num);


var_dump(is_array($num));
var_dump(is_array($_GET));

var_dump(is_numeric("10"));


generate_title("isset, isempty");

######## 1-
//var_dump(isset($m)); # false
//var_dump(empty($m));  # true

### 2-
$ss;
var_dump(isset($ss)); # false
var_dump(empty($ss));  # true


####
$mm= null;
var_dump(isset($mm)); # false
var_dump(empty($mm));  # true

####


$nn= '';
var_dump(isset($nn)); # true
var_dump(empty($nn));  # true


#####
$dd ="iti";
var_dump(isset($dd)); # true
var_dump(empty($dd));  # false

# isset return true if variable exists and
# contains value !=null, otherwise return false

# empty return true if variable is not defined
# or ? defined and contains any of falsy values

generate_title("Foreach");

## foreach array as item ??
$arr = [3,4,53,33];
foreach ($arr as $v){
    echo "{$v}<br>";
}

foreach ($arr as $i=>$v){
    echo "{$i}=>{$v}<br>";
}


# associative array
$info = [
    "name"=>"noha",
    "track"=>"php"
];
print_r($info);
print_r($_GET);
exit; # used while debugging

foreach ($info as $v){
    echo "{$v}<br>";
}

foreach ($info as $k=>$v){
    echo "{$k} => {$v}<br>";
}























































































