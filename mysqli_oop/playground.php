<?php

require '../utils.php';
require '../credits.php';
require 'connect_oop.php';

generate_title("Connect to database use oop mysqli ");

$conn = connect_to_db($db_name,  $db_user, $db_pass, $db_host, $db_port);

//var_dump($conn);

generate_title("Insert operation ");

function insert($conn)
{
    try{
        $inst_query = "Insert Into `users`(`name`, `email`,`password`)
                    values('bbb', 'ahdmed@gmajkild.com', '123456' ); ";

        $res = $conn->query($inst_query);
        var_dump($res);
        # GET AFFECTED ROWS ?
        var_dump($conn->affected_rows);
        # get inserted id ?
        var_dump($conn->insert_id);

    }catch (Exception $e){
        generate_title($e->getMessage(), 1,'red');
    }
}

//insert($conn);

generate_title("update", 1, 'blue');
function update($conn)
{
    try {
        $update_qurty = "update `users` set `name`='updatdd' where `id`=3";

        $res = $conn->query($update_qurty);
        var_dump($res); # true --> query was executed successfully

        var_dump($conn->affected_rows);
        # update
        if ($conn->affected_rows > 0) {
            generate_title('Record updated successfully', 1, 'green');
        } else {
            generate_title('No updates', 1, 'blue');

        }

    } catch (Exception $e) {
        generate_title($e->getMessage(), 1, 'red');
    }
}
update($conn);


########################################################################
generate_title("select", 1, 'purple');

function select($conn){
    try{
        $select_query = "select * from `users`";
        $res = $conn->query($select_query);
        var_dump($res);
//        $rows =$res->fetch_all(MYSQLI_ASSOC);
//        print_r($rows);
        # free result set

        $row = $res->fetch_assoc();
        var_dump($row);

        $res->free_result();


    }catch (Exception $e){
        generate_title($e->getMessage(), 1, 'red');
    }
}

//select($conn);

# close connection
$conn->close();



