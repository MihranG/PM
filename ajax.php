<?php
include ('functions.php');

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
        $password = md5($password);
        $password=mysql_escape($password);
        $username=mysql_escape($username);


        $user = sql("SELECT * FROM users WHERE username='{$username}' AND password='{$password}'");
    }
    if ($user) {
        echo json_encode(['status' => 'ok', 'username'=>$user['username']]);
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['username'];
        $_SESSION['user_type'] = $user['type'];
    } else {
        $error[] = 'please type accurate email and/or password';
        echo json_encode(['status' => 'error', 'errors' => $error]);
    }


}