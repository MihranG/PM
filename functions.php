<?php
$server_address='127.0.0.1';
$DBUsername='root';
$DBPassword='';
$DBName='PM';

$connection=new mysqli($server_address,$DBUsername,$DBPassword,$DBName);
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
function sql($query){
    global $connection;
    $data=array();
    $result=$connection->query($query);
    if(!$result) {
        die("Mysql error: ".$connection->error."<br>".$query);
    }
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
    }
    return $data;
}

function sql_arr($query){
    global $connection;
    $data=array();
    $result=$connection->query($query);
    if(!$result) {
        die("Mysql error: ".$connection->error."<br>".$query);
    }
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    return $data;
}

session_start();

/*if ($_SESSION['user_id']) {
    $user = sql_row("SELECT `name`, `email` FROM author WHERE id = {$_SESSION['user_id']}");
}*/
