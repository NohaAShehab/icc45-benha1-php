<?php


require "utils.php";
generate_title("Closures and classes ");

$printclosure= function(){
    echo "<h6 style='color: purple'>{$this->name}</h6>";
};

class Employee{
    public $name;
    function __construct($name='ahmed')
    {
        $this->name=$name;
    }
}
class Teacher{
    public $name;
    function __construct($name='ahmed')
    {
        $this->name=$name;
    }
}

$emp = new Employee("ahmed Emp");
$t= new Teacher("Ali Teacher");

generate_title("bind a closure to the object ");

$r =$printclosure->bindTo($emp); # new closure can access object properties
print_r($r);
$r();

$printclosure->bindTo($t)();

generate_title("bind closure to the object  access private memebers");

class Person
{
    private $name;
    function __construct($name='private'){
        $this->name=$name;
    }
}

$p = new Person("Noha");
# bind scope of the class ...
# Route::get('', [StudentController::class])
$printclosure->bindTo($p, Person::class)();

# ()()
# from php7
// use call
# closure with call --> automatically access private members
$printclosure->call($p);





generate_title("Closure inside class", 1, 'green');


class Car{
    private $model;
    function __construct($model){
        $this->model=$model;
    }

    function display_car(){
        echo "<h5>Car object {$this->model}</h5>";
        return function ($color='black'){
            echo "new car displayed {$this->model} {$color}";
        };
    }


}

$c= new Car("BMW");
print_r($c);

$re = $c->display_car();
print_r($re);
$re();

$nn = new Car("KIA");
$nn->display_car()("red");





























