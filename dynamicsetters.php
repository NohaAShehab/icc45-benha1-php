<?php

require 'utils.php';

generate_title("Dynamic Setters and getters");

//class Employee{
//    public $name;
//    function __construct($name=''){
//        $this->name = $name;
//    }
//}
//
//$employee = new Employee("Ahmed");
//print_r($employee);
//# this property is added through runtime
//$employee->salary = 10000;
//print_r($employee);


# control adding / retrieving properties
class Employee{
    public $name;
    function __construct($name=''){
        $this->name = $name;
    }

    # CONTROL ADDING EXTRA PROPERTIES TO THE OBJECT
    function __set($name, $value){
        echo "<h5 class='text-danger'>Adding extra property {$name} to the object</h5>";
//        $this->$name = $value;
//        throw  new Exception("Property {$name} is not set");
    }


}

//$employee = new Employee("Ahmed");
//print_r($employee);
//$employee->name='Ali';
//print_r($employee);
//$employee->city ='cairo';
//print_r($employee);

generate_title("Dynamic getter");

class Person{

    public $pname;
    function __construct($pname=''){
        $this->pname = $pname;
    }

    # function to get dynamically added property
    function __set($name, $value){
        echo "<h5 class='text-danger'>Adding extra property {$name} to the object</h5>";
        $this->$name = $value;
    }
    function __get($name){
        echo "<h5>Getting dynamic property {$name}</h5>";
        return $this->$name;

    }
}

$p = new Person("Ahmed");

$p->city = 'cairo';
var_dump($p);

var_dump($p->city);
# call dynamic getter
var_dump($p->__get('city'));











