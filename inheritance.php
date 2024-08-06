<?php


    require 'utils.php';

    generate_title("Inheritance");

    class Person{
        public $name;
        protected $age;
        private $salary;
        public function __construct($name, $age, $salary){
            echo "person created <br>";
            $this->name = $name;
            $this->age = $age;
            $this->salary = $salary;
        }

        /**
         * @return mixed
         */
        public function getAge()
        {
            echo "<h5>called from Person</h5>";
            return $this->age;
        }
    }


    $p= new Person("John Doe", "2012", 2012);
    print_r($p);


    class Employee extends Person{}

//    $e = new Employee("rr",22,33333);
//
//    var_dump( $e instanceof Person);
//    echo $e->getAge();

generate_title("customize child");

//    class Employee2 extends Person{
//        public $email="john@doe.com";
//
//    }

//    $e = new Employee2("John Doe", "2012", 2012);

//    print_r($e);


    #### customize employee to accept email

class Employee2 extends Person{
    public $email="john@doe.com";
    function __construct($name, $age, $salary,$email){
        $this->name= $name;
        $this->age= $age;
        $this->salary= $salary;
        $this->email=$email;
    }

}

$emp2 = new Employee2('444',44,4444,"n@gmail.com");
print_r($emp2);




generate_title("Call parent constructor",1,'orange');

class Employee3 extends Person{
    public $email="john@doe.com";
    function __construct($name, $age, $salary,$email){
        # parent  --> call parent constructor
        parent::__construct($name, $age, $salary);
        $this->email=$email;
    }

}

//$e3 = new Employee3("test",10, 333,
//    'mm@ff.com' );
//
//print_r($e3);

generate_title("Inheritance and protected modifiers");


# public --> accessed anywhere
# protected => accessed only inside class . derived
# classes  --> child

# private --> accessed in side the class


class Employee4 extends Person{

    public $email="john@doe.com";
    function __construct($name, $age, $salary,$email){
        parent::__construct($name, $age, $salary);
        $this->email=$email;
    }

    # define function access age
    function setAge($age){
        $this->age=$age; # access protected member from the derived class
    }

}

$p = new Person("John Doe", 25, 2012);
//print_r($p);
//$p->age = 100;

$emp4 = new Employee4('444',44,4444,"n@gmail.com");
$emp4->setAge(25);
print_r($emp4);
































