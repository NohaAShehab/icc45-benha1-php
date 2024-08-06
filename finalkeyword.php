<?php
    require 'utils.php';
    generate_title("restrict inheritance");
    final class Person{}
    # cannot extend final class
//    class Manager extends Person{}
//
//    $m = new Manager();

####################
generate_title("final method ?");

    class Vehicle{
       final function move(){
            echo "Vehicle is moving";
        }
    }

    class Car extends Vehicle{
        # Cannot override final method Vehicle->move()
//        function move(){
//            echo 'car is moving';
//        }
    }


    $c = new Car();
    $c->move();