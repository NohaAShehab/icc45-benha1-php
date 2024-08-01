<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div     class="container">

    <h1 style="text-align: center; color:red">Welcome To PHP Course from .php file </h1>

    <?php
            echo "Hello world";
            echo "<h1>Date =  </h1>";
            echo date('H:i , jS F Y');
            # this a comment
            // this a comment
            /*
             * this multi-line comment
             * **/
            # define variable in php
            # all variables in php must starts with $
            # all php statements must end with ;
            echo "<h1>Define variable</h1>";
            $name = 'Ahmed';
            echo "My name is {$name}";
            echo "<h1>2- define line</h1>";
            # php ignores new line
            # we must define lines explicity in your script?
            echo "<br>My name is Noha";
    ?>
</div>

<SCRIPT>
    alert("I am .php file ?? ")
</SCRIPT>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>