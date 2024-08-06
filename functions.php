<?php

require 'utils.php';

generate_title("Functions");

//getSum(55,55); # call func.
function getSum($x,$y){
    $z=$x+$y;
    echo 'Sum of x and y is '.$z."<br>";
}
//getsum(5,10);

function getvalues($m, $n){
    echo "m={$m},n={$n}<br>";
}

//getvalues(10,20);
//getvalues(20,30);
//getvalues("iti", 'abc');


generate_title("restrict type",1,'red');

function ask_for_strings(str $str1, str $str2){

    echo "str1= {$str1},str2= {$str2}<br>";
}

//ask_for_strings(10, 20);

generate_title("default , return", 1, "blue");

function sumnums2($num1, $num2=10){
    echo "num1={$num1},num2={$num2}<br>";
    $res = $num1 + $num2;
    return $res;
}

//var_dump(sumnums2(1,2));
//var_dump(sumnums2(2));


generate_title("functions with variable number of args");

function ask_for_candidates ( ... $users)
{
    var_dump($users);
}

//ask_for_candidates("user", 'iti');
//ask_for_candidates();

generate_title("call by value",1,"green");

function mulnums($num1, $num2){
    $num1 +=10; # temp.
    $res= $num1*$num2;
    var_dump( $res);
}

$n =10;
$s=4;

//mulnums($n,$s);
//
//var_dump($n, $s);

generate_title("call by ref.");
function mulnums2(&$num1, &$num2){
    $num1 +=10; # temp.
    $res= $num1*$num2;
    var_dump( $res);
}

//mulnums2($n, $s);
//var_dump($n);
//var_dump($s);




generate_title("Closures",2,'red');

# function without name ??
# higher order function --> function accept
# another function
# or function return with a function


#1- define a closure
$myclousure=function($num){
    var_dump($num);
};

//var_dump($myclousure);
//var_dump(is_callable($myclousure));
//$myclousure("iti");



#########################################3

generate_title("How to use it ");

function dowhatyouwant($anyclosure){
    $anyclosure();
    echo"<h4>I did what do you asked me </h4>";

}

//dowhatyouwant(function(){echo "hiii<br>";});

$myclousure2 = function(){
  echo "<h1>Another call</h1>";
  echo '###################<br>';
};

//dowhatyouwant($myclousure2);



generate_title("bind variable to the closure");

//$base = 10000;
//
//$net_sal= function  ($salary) {
//    global $base;
//    $sal = $salary + $base;
//    var_dump($sal);
//};
//
//# to call it
//
//$net_sal(5000);




$base = 10000;

$net_sal= function  ($salary) use($base) {

    $sal = $salary + $base;
    var_dump($sal);
};

# to call it

$net_sal(5000);

















































































































