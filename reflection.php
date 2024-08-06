<?php
require 'utils.php';
generate_title("Reflection");

$db_name = 'php_banha';
$db_host = 'localhost';
$db_user = 'benha';
$db_pass = 'Iti123456789_';
$db_port = '3306';

try {
    $dsn = "mysql:host={$db_host};dbname={$db_name};";
    $pdo = new PDO($dsn, $db_user, $db_pass);
    var_dump($pdo);

}catch (PDOException $e){
    var_dump($e->getMessage());
    return false;
}



# inspect class architecture in the run time

#1- create reflection class for PDO class


$reflection = new ReflectionClass("PDO");
var_dump($reflection);
print_r($reflection->getMethods());




generate_title("Another example");

class Student{
    public $name;
    protected $email;
    private $grade;
    public function __construct($name, $email, $grade){
        $this->name = $name;
        $this->email = $email;
        $this->grade = $grade;

    }

    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
    function printStudent()
    {
        echo "I am a student";
    }
}




$std_reflection = new ReflectionClass("Student");
print_r($std_reflection->getMethods());

print_r($std_reflection->getProperties());












