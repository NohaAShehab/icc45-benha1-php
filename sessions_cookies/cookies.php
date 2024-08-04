<?php

require '../utils.php';

generate_title("Cookies");

# list all cookies
var_dump($_COOKIE);

setcookie('message', "we need to go home", time() + 60, '/');

setcookie('track', "Full stack using PHP", time() + 60, '/');