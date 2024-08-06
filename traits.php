<?php

    require 'utils.php';
    generate_title('traits');

    class Student{
        private $name;
        function __construct($name){
            $this->name = $name;
        }
        function printName(){
            echo "My name is {$this->name}";
        }
    }


    $s = new Student('James');
    $s->printName();



    class Track{
        private $name;
        function __construct($name){
            $this->name = $name;
        }
        function printName(){
            echo "My name is {$this->name}";
        }
    }

    $t = new Track('PHP');
    $t->printName();
    generate_title("use traits");
    # define pure functionality
    trait printValues{

        function printName(){
            echo "My name is {$this->name}</br>";
        }

        function welcome(){
            echo"<h4>Welcome</h4>";
        }

    }

    class Teacher{
        private $name;
        function __construct($name){
            $this->name = $name;
        }
        use printValues; # use trait function
    }

    $t= new Teacher('Noha');
    $t->printName();
    $t->welcome();



    class Manger{
        use printValues;
        private $name;
        function __construct($name){
            $this->name = $name;
        }

        # override trait function , welcome
        public function welcome()
        {
            echo "this customized for Manager";
        }

    }

    $m = new Manger('ali');
    $m->printName();
    $m->welcome();









