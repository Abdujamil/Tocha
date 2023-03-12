<?php

require_once 'db_connection.php';

$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];
$md5_password = md5($password);
$password2 = $_POST['password2'];
$md5_password2 = md5($password2);

var_dump( $_POST);

mysqli_query($connect, "INSERT INTO `Users` ( `id`, `phone`, `email`, `password`, `confirm_paaword` ) VALUES (NULL,'$phone','$email', '$md5_password', '$md5_password2')");

header("Location: /home.php");

//$query = mysqli_query(db, "SELECT * FROM `Users` WHERE `phone`='{$phone}', `email`='{$email}', `password`='{$md5_password}', `confirm_paaword`= '$md5_password2'");
//
//if(mysqli_num_rows($query) === 0){
//    $_SESSION['user'] = ['phone' => $phone];
//    mssql_query(db, "INSERT INTO `Users` ( `id`, `$phone`, `$email`, `$password`, `confirm_paaword` ) VALUES (NULL,'$phone','$email', '$md5_password', '$md5_password2')");
//    header("Location: /user.php");
//}else{
//    echo ('Ошибка: Данный логин занят другим пользователем.');
//}
