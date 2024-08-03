<?php


require 'utils.php';
generate_title("Arrays", 1,'blue');

generate_title("1- indexed arrays", 1, 'green');

$any_data = [1,2,'iti','test', 344.4, true, ['php', 'mysql']];
//print_r($any_data);

var_dump($any_data[3]);
var_dump($any_data[6][0]);

$arr = array(3,234,'true',333);
var_dump($arr);

$n_array = range(0,10, 2);
print_r($n_array);

$c_range= range('a',  'z',3);
print_r($c_range);


generate_title("Associative array ");

$info = [
    'name'=>'noha',
    'email'=>'noha@gmail.com',
    'password'=>'abc'
];

var_dump($info);


generate_title("Array operations ",1,'red');
generate_title("1-get size of array",2, 'blue');

var_dump(count($c_range));

var_dump(sizeof($n_array));


generate_title('loop over array',2,'green');
for ($i = 0; $i < sizeof($n_array); $i++) {
    echo "<li> {$n_array[$i]}</li>";
}

foreach ($c_range as $c){
    echo "<li>{$c}</li>";
}

foreach ($c_range as $i=>$c){
    echo "<li>{$i}=>{$c}</li>";
}

generate_title("Check this ", 1, 'red');

$arr = [
    0=>'ahmed',
    1=>'ali',
    4=>'test'
];  # this associative
var_dump($arr);
//for ($i = 0; $i < sizeof($arr); $i++) {
//    echo "<li> {$arr[$i]}</li>";
//}

$arr2 =['ahmed','ali'];
var_dump($arr2);


generate_title("create array from variables");
$username='noha';
$useremail='noha@gmail.com';

$userinfo = compact('username','useremail');
print_r($userinfo);


generate_title("Array operators", 1,'blue');
$num=[2,4,6,8,10];  # 0->4
$alphas=["a","b","c","d",'e','f','g']; # 0->6
$arr3= $num+$alphas;  # union
print_r($arr3);


$arr1 = [1,2,3];
$arr2 = ['1','2','3'];
var_dump($arr1==$arr2);
var_dump($arr1===$arr2);

generate_title("Sorting array ");

$arr = [42335,424,124,3124,123,'noha',124,-10,10,"iti", true];
print_r($arr);
sort($arr); # sort with value ascending ?
print_r($arr);

rsort($arr);
print_r($arr);


generate_title("Sorting associative array ");

$myinfo = [
    "name"=>'noha',
    'email'=>'noha@gmail.com',
    'track'=>'php',
    'city'=>'cairo'
];

print_r($myinfo);

# sort ascending
//sort($myinfo);
//print_r($myinfo); # sorting values , ignore keys??


# sort associative array ?
asort($myinfo); # sort with values --> keeping the keys
print_r($myinfo);

# reverse the sort ?
arsort($myinfo); # sort with values --> keeping the keys
print_r($myinfo);

# sort with key ??
ksort($myinfo);
print_r($myinfo);

krsort($myinfo);
print_r($myinfo);















##########
generate_title("user sort ");

function compstr($str1, $str2){
    if(strlen($str1)< strlen($str2)){
        return -1;
    }else if(strlen($str1)>strlen($str2)){
        return 1;
    }else{
        return 0;
    }
}

$names =['ahmed', 'noha','mostafa','aser', 'mai', 'shrouk'];

usort($names, 'compstr');
print_r($names);






generate_title("reordering the arrays");
$names =['ahmed', 'noha','mostafa','aser', 'mai', 'shrouk'];

shuffle($names);
print_r($names);

$reversed_names=array_reverse($names); # return new array
print_r($reversed_names);


# add element to the array
array_push($names,'abbass');
print_r($names);

array_pop($names);
print_r($names);






generate_title('Array flip', 1, 'orange');
$colors = array(
    'one' => 'red',
    'two' => 'blue',
    'three' => 'yellow',
    'four'=>'red');

print_r($colors);

$new_arr=array_flip($colors);
print_r($new_arr);


generate_title("Array navigation");

$fruits = ['banana', 'apple','kiwi', 'strawberry', 'orange'];
$found = in_array('banana', $fruits);
var_dump($found);
var_dump(current($fruits));
var_dump(next($fruits));
var_dump(current($fruits));
var_dump(end($fruits));
var_dump(prev($fruits));
var_dump(reset($fruits));


function printVal($anyval){
    echo "<li style='color: purple;font-weight: bold;'>{$anyval}</li>";
}

array_walk($fruits, 'printVal');


generate_title("Array merge");
$a=array(5=>"banana",22=>"Kiwi");
print_r(array_merge($a));


$b=["name"=>'noha', 'email'=>'noha@gmail.com', 'track'=>'php', 'city'=>'cairo'];

print_r(array_merge($a, $b));
print_r(array_merge($b, $a));
$c = array_merge($b, $a);

$output_array = array_chunk($c, 2);
print_r($output_array);

generate_title("Array Navigation");

$instructors = ["Eng. Shery", "Noha", "Andrew"];
$courses = ['Admin', 'PHP', 'Node'];

function course_info($inst, $course){
    return "{$inst} teaches {$course}";
}

$res = array_map("course_info", $instructors, $courses);
var_dump($res);


$combinedArray = array_combine($instructors,$courses);
print_r($combinedArray);


$my_array = [1,90,2,null,3,'',55,[],5,6,7,8,""];
$non_empties = array_filter($my_array);
print_r($non_empties);


generate_title("Array intersect key");
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'
=> 8);
print_r($array1);
print_r($array2);
print_r(array_intersect_key($array1, $array2));


# array of values  --> pass only name , grade ?


$post_info = [
    "name"=>'ahmed',
    "email"=>'noha@gmail.com',
    'grade'=>100,
    'track'=>'php',
    'branch'=>'benha'
];

# generate array --> name, grade only
$valid_keys = ["grade", "name"];
$valid_keys = array_flip($valid_keys);
print_r($valid_keys);


print_r(array_intersect_key($post_info, $valid_keys));







generate_title("Array count values");
$students=Array("Ali","Ahmed","Mostafa","Omar",
    "Ahmed");

print_r(array_count_values($students));

#
generate_title("Convert array to scalar");
$info=["username"=>"Noha","email"=>"nshehab@iti.gov.eg",
    "track"=>"Application", 10=>"iti"];
extract($info);
var_dump($username, $email, $track);















































