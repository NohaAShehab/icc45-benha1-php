<?php


require 'utils.php';

# oop --> keywords (class , object , new , abstract )
# principles ?? (encapsulation, polymorphism , abstraction, inheritance , reflection"

generate_title("define a class ",1,'red');
# template for object
# blueprint for architecture
# class provide set of objects
# limit that you can only take one from object
# from class --> singleton class


generate_title("1- define  a class", 2);

class User{

}

//$u = new User();
//var_dump($u);
//
//$uu = new User;
//var_dump($uu);
//
//# loosely dynamically typed lang,
//# change object arch. in the runtime ?
//$u->name='ahmed';
//$uu->email = 'ahmed@gmail.com';
//var_dump($uu);
//var_dump($u);

## OOP rule
# all objects from the same class must have
# the same properties and can perform the same
# functionality


# class describe employees --> have only one manager
# manage is an employee with extra property manage
#
#
# class emp, class manager inherits from emp.
#
#
class Employee{

}

//$e1=new Employee();
//$e2 = new Employee();
//$m = new Employee();
//$m -> manage=true;
//var_dump($m);



generate_title("Classes with properties");

# you must define the access modifier for the property?
#
class Student{
    public $name;
    protected  $email ;
    private $grade ;
}

# limit accessibility --> control the changes

//$s = new Student();
//var_dump($s);
//$s->name='noha';
//print_r($s);
//$s->email = 'noha@gmail.com'; # Fatal error:  Uncaught Error: Cannot access protected property Student::$email in /var/www/html/icc45/benha/day05/oop.php:77

# define function set email ---> check if email follow pattern or not

//$s = new Student();
//print_r($s);

generate_title("Student with default values for the properties");

class Student2{
    public $name='ahmed';
    protected $email = 'ahmed@gmail.com';
    private $grade = 100;
}

//$s1 =new Student2();
//print_r($s1);
//$s2= new  Student2();
//print_r($s2);


generate_title("Cutomize object creation ?",1,'blue');

class Std{

    public $name;
    protected $email;
    private $grade;

    function __construct($name, $email, $grade)
    {
        generate_title("object is being created",5,'green');

//        var_dump("here", $this);
        $this->name = $name;
        $this->email = $email;
        $this->grade = $grade;
    }

    # define behaviour
    function printStd(){
//        print_r($this);
        echo "Student(name={$this->name}, email=$this->email, grade={$this->grade})";
    }

    #
}

$s1= new Std("n", "n", 3);
print_r($s1);
$s1->printStd();


$s3= new Std("Ahmed", "ahmed@gmail.com", 5);
//print_r($s3);
$s3->printStd();


##################################3
generate_title("Generate functions that helps access private, proptected members");

class Std2{

    public $name;
    protected $email;
    private $grade;

    function __construct($name='', $email='', $grade=0)
    {
        generate_title("object is being created",5,'green');

//        var_dump("here", $this);
        $this->name = $name;
        $this->email = $email;
        $this->grade = $grade;
    }

    # define behaviour
    function printStd(){
//        print_r($this);
        echo "Student(name={$this->name}, email=$this->email, grade={$this->grade})";
    }

    #define setter function for the email

    /**
     * @param mixed|string $email
     */
    public function setEmail($email)
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email = $email;
        }else{
            throw new Exception("Invalid email");
        }

    }
}


$s = new Std2("ahmed", "ahmd@gmail.com", 5);
print_r($s);

//$s->setEmail("iti");

$s2 = new Std2("ahmed", "datttaa", 5);
print_r($s);


class Std3{
    # object properties
    public $name;
    protected $email;
    private $grade;

    # special method is called while creating the object
    function __construct($name='', $email='', $grade=0)
    {
        generate_title("object is being created",5,'green');

//        var_dump("here", $this);
        $this->name = $name;
//        $this->email = $email;
        $this->setEmail($email);
        $this->grade = $grade;
    }

    # instance method
    # define behaviour
    function printStd(){
//        print_r($this);
        echo "Student(name={$this->name}, email=$this->email, grade={$this->grade})";
    }

    #define setter function for the email

    /**
     * @param mixed|string $email
     */
    public function setEmail($email)
    {
        var_dump($email);
        if(filter_var($email, FILTER_VALIDATE_EMAIL) or $email===''){
            $this->email = $email;
        }else{
            throw new Exception("Invalid email:{$email}");
        }

    }

    public function getEmail(){
        return $this->email;
    }
}

$s33= new Std3();
print_r($s33);

//$s34= new Std3("ahmed", "iti", 33);
////print_r($s34);







generate_title("destructor", 1,'red');

class Human{
    function __construct($name)
    {
        $this->name= $name;
    }
    function __destruct(){
        generate_title("Human object {$this->name} is being destructed",5, 'red');
    }
}

var_dump("ddd");
var_dump("JKSHFJKSDHF");
$h = new Human("Ahmed");
unset($h); # delete the object ,,, --> it call desctructor .
$h2= new Human("Mohamed");
$h3= new Human("Ali");
$h4= new Human("abc");
# once the application reached its end , the object will be destructed

generate_title("jjkhjkhkj");
generate_title("00000000000000");



















