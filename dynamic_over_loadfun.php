<?php
require 'utils.php';
generate_title("Dynamic overload");


class Student{
    private $email = 'iti';
    function printHi(){
        echo "hiiiiiii";
    }
    # this is applied on the runtime called functions
    function __call($name, $arguments){
        print_r($arguments);
        var_dump("function name is $name");
        echo "{$this->email}<br>";

        return false;
    }

    static function __callStatic($name, $arguments){
        generate_title("Calling static method {$name}",5);
        print_r($arguments);

    }
}

$s = new Student();
$s->sayhi();

$s2= new Student();
$s2->printWelcome("ahmed","mohamed", 'ali');

$s2->printHi();

Student::Myfun(4,5,6,4,33);