<?php


namespace config{
class Student{
    private $info;
    function __construct($info){
        $this->info = $info;
    }

    function displayinfo(){
        echo "info= {$this->info}";
    }
}
}
