<?php

    require 'utils.php';

    generate_title("1- we need to define 
    general architecture,
    not interested about 
    implementation");


    abstract class Vehicle{
        # must contain abstract method
        # abstract method --> method without body

        abstract function move();

    }

//    $v= new Vehicle();
    //Fatal error:  Uncaught Error:
    // Cannot instantiate abstract class
    // Vehicle
    // in /var/www/html/icc45/benha/day05/abstract_class.php:19
    //Stack trace:

# to take an object
# when extend abstract class
# you must either override abstract method
class Car extends Vehicle{
    public function move()
    {
        echo "Car is moving <br>";
        // TODO: Implement move() method.
    }
}

$c = new Car();
    $c->move();
    var_dump($c instanceof Vehicle);


    ###############33

# 2- inherit --> and make the new class abstract also

abstract class Train extends Vehicle{

    function speed(){
        echo "any speed";
    }
}


class FlyingTrain extends Train{

    public function move()
    {
        // TODO: Implement move() method.
        echo "Flying train is moving <br>";
    }
}


$ft = new FlyingTrain();
$ft->move();
$ft->speed();







generate_title("abstract method");

abstract class Teacher{

    abstract function teach();
}
# class contains abstract methods must declared
# as abstract class



##########################


abstract class Test{

     function test(){
         echo "test";
     }
}

# you cannot take an object from this class





