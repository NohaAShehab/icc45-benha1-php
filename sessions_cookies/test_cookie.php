<?php


require '../utils.php';
print_r($_COOKIE);


# remove cookie
setcookie('track', "", time() - 60, '/');