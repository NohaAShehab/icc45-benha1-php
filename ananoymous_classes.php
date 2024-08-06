<?php

require 'utils.php';



function sumnum(int $num){
    var_dump($num);
}
//sumnum("iti");

interface  Message
{
    function displayMessage();
}

//class Test implements Message{
//    function displayMessage(){}
//}
//
//$t = new Test();
//var_dump($t instanceof  Message);

##################
class Printer{
    private  Message $content;

    function setContent(Message $content){
        $this->content = $content;
    }

    /**
     * @return Message
     */
    public function getContent(): Message
    {
        return $this->content;
    }


}


$p = new Printer();
//$p->setContent("Hello World!");
# set content needs an object from type Message
# but message is an interface ??
# I need to create class implment message interface so I can take an object

//class TempClass implements Message{
//    public function displayMessage()
//    {
//        echo "<h1> I am from the temp class --Type Messge";
//        // TODO: Implement displayMessage() method.
//    }
//}
//
//$mycontent = new TempClass();
//$p->setContent($mycontent);
//
//print_r($p);
//$res =$p->getContent();
//var_dump($res, $res instanceof Message);
//$res->displayMessage();


# I have implemented a class to take only one object


$p1 = new Printer();
$p1->setContent(new class implements Message{
    function displayMessage(){
        echo "<h3 style='color: red'>this message of object1 </h3>";
    }
});

$p1->getContent()->displayMessage();

$p2= new Printer();
$p2->setContent(new class implements Message{
    function displayMessage(){
        echo "<h3 style='color: blue'>this message of objects ";
        echo "<br> ##################</h3>";
    }
});

$p2->getContent()->displayMessage();

//print_r($p1);
//print_r($p2);
var_dump($p1->getContent());
var_dump($p2->getContent());
#customize behaviour based on caller object
$p1->getContent()->displayMessage();
$p2->getContent()->displayMessage();



###################3