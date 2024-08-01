<?php


require 'utils.php';

generate_title("1-Global scope");

$name = 'Ahmed';
# any variable defined in the script
# can be accessed anywhere in the script
# except inside function

var_dump($name);
echo "<br>---------<br>";
var_dump($name);

function sayhi(){
    # I cannot access it directly
    echo "<h1>Hiiii {$name}</h1>";
}
sayhi();

generate_title("Access global variable 
from inside the function",3, 'red');

function sayHello(){
    global $name; # access the global defined name--
    echo "<h1>Hello {$name}</h1>";
    $name = 'noha';
}

sayHello();
var_dump($name);

##################################


generate_title("2-Local scope", 1, 'blue');

# any variable defined inside the function ,
# variable with local scope ??

function printinfo(){
    $username= 'noha';
    $email = 'n@gmail.com';
    var_dump($username, $email);
}

printinfo();

var_dump($username, $email);


generate_title("3-Parameter scope", 1, 'brown');

function sumnum($num1, $num2){
    # num1, num2 can be accessed only inside the class
    $num1 +=10;
    $res = $num1 + $num2;
    echo "num1+num2 = {$res}";
}
sumnum(3,4);

var_dump($num1, $num2);


###############3 constant ??
generate_title("4-Constants", 1, 'green');
# constant name without $
const iti = 'Information Tech. Inst.';

echo iti;

# access constant from inside the function ?

function printconst()
{
    echo '<br>',iti, "access constant from inside the function";
}

printconst();

####################################
generate_title("5-Static variable", 1,
    'purple');


function countcalls(){
    static $counter=0;
    # static variable can be accessed only inside the function
    print("Hi Team , PHP is simple<br>");
    $counter +=1 ;
    print("the function called {$counter} times");
    echo "<br>-----------------------<br>";
}

countcalls();
countcalls();
countcalls();
var_dump($counter);


generate_title("Superglobal variable", 1, 'green');

# variable --> related to PHP env. itself .
# $_POST, $_GET, $_REQUEST, $_SESSION, $_COOKIE
# $_FILES


# these superglobal variables can be accessed anywhere

var_dump($_GET);

# add variables
$_GET['track']='PHP';
var_dump($_GET);


function printsupervariable(){
    echo $_GET['track'];
    $_GET['name']='Noha Shehab';
}
printsupervariable();
var_dump($_GET);
##############################################
generate_title("Echo vs print");

echo "iti", $name; # output value to the stream
# doesn't return with value
echo "php";



#output string to the stream
# and returns with 1

#
print_r($_GET);

$a =print($name);
var_dump($a);
//#######################################












