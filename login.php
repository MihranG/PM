<?php
//print_r($_POST);
include ('functions.php');
include('content.html.php');

if ($_POST) {
    $password = $_POST['password'];
    $username = $_POST['username'];
    $error = [];
    //p($error);
    if (!$username) {
        $error[] = "please type your username";
    }  else {
        $valid = true;
    }
    if (!$password) {
        $error[] = "please type your password";
    } elseif ($valid == true) {
        $user = sql("SELECT * FROM users WHERE username='{$username}' AND password='{$password}'");
    }
    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['username'];
    } else {
        $error[] = 'please type accurate email and/or password';
    }
}