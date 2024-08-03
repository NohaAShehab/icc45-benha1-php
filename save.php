<?php


var_dump($_POST);

echo "Your skill = ";
foreach ($_POST['skills'] as $s) {
    echo "{$s} ,";
}

# implode