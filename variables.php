<?php

require 'utils.php';

generate_title("Variables and literals");

# loosely dynamically typed lang

$name = 'ahmed';
var_dump($name);

$name = 10;
var_dump($name);
# interpreter detect datatype in the runtime

generate_title("variables names are case sensitive", 2, 'red');
$track = 'PHP';
$Track = 'Full stack using php';

var_dump($track);
var_dump($Track);

#
generate_title("Variables and literal string",1,'blue');

$iti = "information Technology institute";

echo $iti;
echo "<br>I works at $iti";# double quoted string
echo '<br>I works at $iti'; # single quoted string
echo '<br>I works at {$iti}'; # single quoted string
echo "<br>I works at {$iti}";
