<?php
    require '../credits.php';
    require '../utils.php';
    require 'db_conn.php';

    generate_title("Connect to database using mysqli", 1, 'red');

    $conn = connect_to_db($db_name, $db_user, $db_pass, $db_host, $db_port);
//    var_dump($conn);


    #### use connection 00> to create table in the database

    # any operation you perform on db 00> Wrapping with try catch
generate_title("Create table ");
function create_table($conn){
    try{
        $query = "create table `users`(`id` int auto_increment primary key,
        `name` varchar(50) not null, `email` varchar(50) unique ,
         `password` varchar(50))";

       $res = mysqli_query($conn, $query);
       var_dump($res); # true -->
    }catch (Exception $e){
        generate_title($e->getMessage(), 1,'red');
    }

}
# insert into table ??
generate_title("Insert", 1, 'red');
function insert($conn)
{
    try{
        $inst_query = "Insert Into `users`(`name`, `email`,`password`)
                    values('bbb', 'ahdmed@gmaild.com', '123456' ); ";

        $res = mysqli_query($conn, $inst_query);
        var_dump($res);

    }catch (Exception $e){
        generate_title($e->getMessage(), 1,'red');
    }
}
//insert($conn);
############################################################################33
generate_title("update", 1, 'blue');
function update($conn)
{
    try {
        $update_qurty = "update `users` set `name`='updatdd' where `id`=1";

        $res = mysqli_query($conn, $update_qurty);
        var_dump($res); # true --> query was executed successfully

        var_dump($conn);
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


generate_title("delete", 1, 'red');
function delete($conn)
{
    try {
        $delete_query = "delete from `users` where `id`=1";

        $res = mysqli_query($conn, $delete_query);
//    var_dump($res); # true --> query was executed successfully

        var_dump($conn);
        # update
        if ($conn->affected_rows > 0) {
            generate_title('Record deleted successfully', 1, 'green');
        } else {
            generate_title('No updates', 1, 'blue');

        }

    } catch (Exception $e) {
        generate_title($e->getMessage(), 1, 'red');
    }

}

### select



generate_title("select", 1, 'purple');

function select($conn){
    try{
    $select_qurty = "select * from `users`";
    $res = mysqli_query($conn, $select_qurty);
    var_dump($res); # object contain info about data ??
//    var_dump($conn);

        $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
        print_r($rows);
        # free result set
        mysqli_free_result($res);

    }catch (Exception $e){
        generate_title($e->getMessage(), 1, 'red');
    }
}

select($conn);





# when finish your operation --> close connection

$conn->close();












