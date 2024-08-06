<?php

require 'utils.php';

function randomNumbers($length)
{
    $array = [];
    for($i=0;$i<$length;$i++){
        $array[]=mt_rand(1,10);
    }
    return $array;
}
# 1---> to n ?? generate number when need it
//$vals =randomNumbers(10);



function gen($length)
{
    for($i=0;$i<$length;$i++){
        $num=mt_rand(1,1003);
        yield $num;
    }

}

$num_gen = gen(10 );
var_dump($num_gen);

foreach($num_gen as $num){
    echo "{$num}<br>";
    # each time will generate new value
}






