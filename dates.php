<?php

require 'utils.php';

##########################33

generate_title("Dates");

#1-
    var_dump(time());  # current time stamp

var_dump(date('jS F Y'));

# convert time / date to time stamp
var_dump(mktime(1,0,0,5,8,2024));


generate_title("Date time ");
$date = new DateTime();
var_dump($date);
$timeZone = $date->getTimezone();
var_dump($timeZone);
echo $timeZone->getName()."<br>";


### get time in seconds
generate_title("time");
$time=time();
var_dump($time);
var_dump(date('U'));  # return with the time stamp
var_dump(getdate());

generate_title("Check date");


var_dump(checkdate(2, 29, 2024)); // valid
var_dump(checkdate(3, 32, 2021));

generate_title("Format time ");

echo strftime('%A')."<br>";
echo strftime('%X')."<br>";
echo strftime('%c')."<br>";
echo strftime('%y')."<br>";


generate_title("Calculate time ");

$bdayunix = mktime (0, 0, 0, 1,1, 2000);
$nowunix = time(); // get unix ts for today
$ageunix = $nowunix - $bdayunix;
$time=$ageunix / (365*24 * 60 * 60);
var_dump($time);

































