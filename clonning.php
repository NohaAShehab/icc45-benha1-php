<?php

require 'utils.php';

class Engine{
    public $type;

    # control clone
    function __clone(){
        echo "<h1>clonning object</h1>\n";
    }
}

$e = new Engine();
$e->type = 'abc';

# shallow copy
$e2= $e;
var_dump($e);
var_dump($e2);

$e2->type='test';
var_dump($e2);
var_dump($e);


# deep copy ---> create new object with new ref

$e3 = clone $e;
var_dump($e3);
$e3->type='ffff';
var_dump($e3);
var_dump($e);

