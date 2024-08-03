<?php


require '../utils.php';

generate_title("Append data to file ");

# when you open file with append mode ?
# if file doesn't exist --> PHP try to create it
# if file exists ?? php open file for appending starting from the
# end of the file ?? keep old content

$fileobj= fopen("mycv.txt",'a');
if ($fileobj) {
    generate_title("Opened", 2, 'green');

    # save data to the file ?

    fwrite($fileobj,"\n####################\n");


    ### close file
    fclose($fileobj);
} else {
    generate_title("Error", 2, 'red');
}


