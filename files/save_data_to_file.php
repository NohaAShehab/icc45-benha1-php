<?php


require '../utils.php';

generate_title("Write data to file ");

# when you open file with write mode ?
# if file doesn't exist --> PHP try to create it
# if file exists ?? php open file for writing starting from the
# beginning of the file ?? remove old content
# open file accept fname , mode
//$fileobj  =fopen("mycv.txt", 'w');
if($fileobj){
    generate_title("Opened", 2, 'green');

    # save data to the file ?

   fwrite($fileobj,"I works at ITI\n");
   fwrite($fileobj,"I love kiwi".PHP_EOL);
   fwrite($fileobj,"I need to sleep");



    ### close file
    fclose($fileobj);
}else{
    generate_title("Error", 2, 'red');
}


generate_title("file_put_content ");
file_put_contents("mycv.txt","My name is Noha");