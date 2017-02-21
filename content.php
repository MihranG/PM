<?php
include('functions.php');
$tasks = array();

if ($_SESSION['user_type'] == 0) {
    $tasksquery = 'SELECT tasks.*, users.username FROM tasks
  LEFT JOIN users
  on tasks.user_id=users.id';
    $tasks = sql_arr($tasksquery);
} else {
    $tasksquery = "SELECT * FROM tasks
    WHERE user_id={$_SESSION['user_id']}";
    $tasks = sql_arr($tasksquery);

}


include('content.html.php');
