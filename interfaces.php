<?php


    require 'utils.php';

    generate_title("Interfaces");

    # this is a solution for the problem of php
# doesn't support multiple inheritance

# focus on architecture ... ignore implementation

# interface is not a class, so you cannot object form

# interface all functions inside it are abstract
interface Transportation
{
        # contain methods all abstract
    function move ();
    function restart ();
    function stop ();
}

interface Machine
{
    function engine ();
}

# Class must be declared abstract or implement methods
# 'move', 'stop', 'restart', 'engine'

//abstract class Car implements Transportation, Machine{
//
//}
# override abstract methods
class Car implements Transportation, Machine{
    public function engine()
    {
        echo "<h5>Engine</h5>";
        // TODO: Implement engine() method.
    }
    public function move()
    {
        // TODO: Implement move() method.
    }
    public function stop()
    {
        // TODO: Implement stop() method.
    }
    public function restart()
    {
        // TODO: Implement restart() method.
    }
}

$c = new Car();
$c->engine();

var_dump($c instanceof Transportation);