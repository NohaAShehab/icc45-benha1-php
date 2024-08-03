<?php

    require '../utils.php';

    generate_title("Dealing with files");

    generate_title("Open filee", 1, 'red');
    # open file accept fname , mode
    $fileobj  =fopen("students.txt", 'r');
    # if file doesn't exit --> you will receive a warning ??
    if($fileobj){
        generate_title("Openeded", 2, 'green');
        var_dump($fileobj);
        var_dump(is_resource($fileobj));

        ### do operation
        # to read file ? get size of file
        $file_size = filesize("students.txt");
        var_dump($file_size);

        # to read data ?
        generate_title("into one string", 3,'blue');
        $data = fread($fileobj,$file_size);
        var_dump($data);

        generate_title("Pointer change loc", 2);
        # reset pointer to the beginning of the file ?
//        rewind($fileobj); # reset pointer to the beginning of the file
        fseek($fileobj,0);
        generate_title("read file by line ?? ");

//        $lines = fgets($fileobj, 1000);
//        var_dump($lines);
        $lines = [];
        while(!feof($fileobj)){
            $line = fgets($fileobj);
//            var_dump($line);
            array_push($lines, $line); # push element to the array
        }
        # add element to the array ?
        var_dump($lines);



        ### close file
        fclose($fileobj);
    }else{
        generate_title("Error", 3, 'red');
    }


    generate_title("More functions");
    generate_title("1-file_get_contents", 2, 'brown');

    # no need to open / close files ??
    $data =file_get_contents("students.txt");
    var_dump($data); # string

    generate_title("2-readfile");

    readfile("students.txt"); # output file content the stream

    generate_title("3-file function", 1, 'green');

    $lines = file("students.txt"); # read file content to an array
    # in one step
    var_dump($lines);

















