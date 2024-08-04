<?php

    require "utils.php";

    generate_title("Trim functions");

    $message = "   PHP is very simple and very interesting technology  ";

    var_dump($message);
    var_dump(rtrim($message)); # return new string

    # string is immutable

    var_dump(trim($message, "P ig"));


    generate_title("format string ");

    $bio = "My name is Noha
    I am a Senior Software Engineer
    I works at iti.";

//    echo $bio;
//
//echo nl2br($bio);


$s = 'monkey';
$t = 'many monkeys';
printf("[%s]\n",        $s); // standard string output
printf("[%10s]\n",      $s); // right-justification with spaces

$c = 65;
printf("%%c = '%c'\n", $c); // print the ascii character, same as chr() function


###################3


$num = 5;
$location = 'tree';
//$format = "There are {$num} monkeys in the {$location} tree.";
//var_dump($format);


# substitute using sprintf
$format = "There are %d monkeys in the %s tree.<br>";
var_dump($format);
echo sprintf($format, $num, $location);


$string= "welcome to iti";
echo strtoupper($string)."</br>";
echo strtolower($string)."</br>";
echo ucfirst($string)."</br>";
echo ucwords($string)."</br>";

generate_title("format string to storage");

$question="what's your name? what's your age?";

# string  name='noha'
echo addslashes($question)."</br>";

$res = addslashes($question);
echo stripslashes($res)."</br>";


generate_title("split , join string");
$InputArray = array('OS','Application','Track', 33);

$track_name=implode(" ", $InputArray);
var_dump($track_name);

$t = join("_", $InputArray);
var_dump($t);

$str="I love coffee so much";
$arrstr=explode(" ",$str);
print_r($arrstr);

generate_title("String Tok", 1, "blue");
//$string = "My name is Noha, I works at ITI";
//$tok = strtok($string, " ");
//echo $tok."</br>";
//echo $string."</br>";
//
//while ($tok !== false) {
//    echo "Word=$tok<br/>";
//    $tok = strtok(" \n\t");
//}

####
$phptxt="PHP is simple";
echo substr($phptxt,1),"<br>";
echo substr($phptxt,1, 5),"<br>";
echo substr($phptxt,-2);
generate_title("Comparing",1, 'red');

$var1 = "Hello";
$var2 = "hello";
var_dump(strcmp($var2, $var1));
var_dump(strcasecmp($var1, $var2)); # ignore cases
if (strcmp($var1, $var2) !== 0) {
    echo '$var1 is not equal to $var2 in
            a case sensitive string comparison <br>';
}

$str="Welcome to php";
var_dump(strlen($str));

generate_title("strstr",1, 'purple');
$email = 'name@example.com';
$domain = strstr($email,'@');
echo $domain."<br>";


$string = 'Hello World!';
$testt= md5($string);
echo($testt)."<br>";
generate_title("Encryption");
echo md5("Hello World!"),"<br>";
echo(ord("Ahmeds"))."<br>";
generate_title("Repeat");
echo str_repeat("iti ", 5)."<br>";
$str = 'abcdef';
echo str_shuffle($str)."<br>";

generate_title("string replace", 1,'red');
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");

$name='noha shehab';

echo str_replace($vowels, "@", $name);




$input = array('A: AAAA', 'B: NNN', 'C: SSS');

print_r($input);

# replace part of string offset3, length 3- > YYY
var_dump(substr_replace($input, 'YYY', 3,3,));

generate_title("Regex",1,'Green');

# noha@iti-iti.com

$email='nshehab@iti.gov.eg@iti.com.eg';
$pattern="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
var_dump(preg_match($pattern, $email));
if(preg_match($pattern, $email)){
    echo "well formed";
}

$email2='nshehab@iti.gov.eg@iti.com.eg';
$pattern2='^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^';
var_dump(preg_match($pattern2, $email2));
var_dump(preg_match_all($pattern2,$email2, $matches));
var_dump($matches);





generate_title("Filter var");
$email='nshehab@iti.gov.eg';
var_dump(filter_var($email,FILTER_VALIDATE_EMAIL));

//https://www.php.net/manual/en/filter.filters.validate.php


























































































































