<?php

require 'utils.php';

interface Animal
{
    function makenoise();
}

class Cat implements Animal{
    function makenoise(){
        echo "<h1 class='text-primary'>Cat Meow</h1>";
    }
}

class Dog implements Animal{
    function makenoise(){
        echo "<h1 class='text-success'>Dog bark</h1>";
    }
}


class Person {

    private $petPerference;

    /**
     * @param mixed $petPerference
     */
    public function setPetPerference(Animal $petPerference): void
    {
        $this->petPerference = $petPerference;
    }

    public function getPetPerference(): Animal{
        return $this->petPerference;
    }
}



$person = new Person();
$person->setPetPerference(new Dog());

print_r($person);


$p2 = new Person();
$p2->setPetPerference(new Cat());
print_r($p2);


generate_title("dynamic override based on caller object");
$person->getPetPerference()->makenoise();  # pe

$p2->getPetPerference()->makenoise();


$p3= new Person();
$p3->setPetPerference(new class implements Animal{
    function makenoise(){
        echo "<h1 class='text-danger'>Chicken sssss</h1>";
        echo "-------------------";
    }
});

$p3->getPetPerference()->makenoise();


