<?php

session_start();
require_once 'db_connection.php';

$phone = $_POST['phone'];
$password = $_POST['password'];
$md5_password = md5($password);

$log_user = mysqli_query($connect, "SELECT * FROM `Users` WHERE `phone` = '$phone' AND `password` = '$md5_password'");

if(mysqli_num_rows(@$log_user) > 0){

    $user = mysqli_fetch_assoc($log_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "phone" => $user['phone'],
        "password" => $user['password'],
    ];

    header("Location: ./profile.php");

}else{
    $_SESSION['message'] = 'Неверный логин или пароль...';
    header("Location: /");
}
