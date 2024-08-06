<?php
require "utils.php";
generate_title("Static members");

# all static members don't need an instance form class


class Employee{
    static $count=0;

    function __construct(){
        generate_title("object is created", 5);
        self::$count++;
    }

    # use self keyword to represent class -->
    # access static member
    static function get_no_of_employees(){
        echo "<h1>All emps = ",self::$count, "</h1>";
    }

    function __destruct(){
        generate_title("object is deleted", 5,'red');
        self::$count--;
    }

}

echo Employee::$count;
# call static function
Employee::get_no_of_employees();

$emp =new Employee();
Employee::get_no_of_employees();


$emp2 =new Employee();
Employee::get_no_of_employees();


$em3 =new Employee();
Employee::get_no_of_employees();


unset($emp);

Employee::get_no_of_employees();


Employee::$count = 10;
Employee::get_no_of_employees();


#######################################

class Employee2{
    static private $count=0;

    function __construct(){
        generate_title("object is created", 5);
        self::$count++;
    }

    # use self keyword to represent class -->
    # access static member
    static function get_no_of_employees(){
        echo "<h1>All emps = ",self::$count, "</h1>";
        return Employee::$count;
    }

    function __destruct(){
        generate_title("Employee2 is deleted", 5,'red');
        self::$count--;
    }

}

Employee2::get_no_of_employees();
//Employee2::$count =10;
$em= new Employee2();
$emp2= new Employee2();
$emp4 = new Employee2();
Employee2::get_no_of_employees();














