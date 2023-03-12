<?php

require_once 'db_connection.php';

$phone = $_POST['phone'];
$password = $_POST['password'];
$md5_password = md5($password);

mysqli_query($connect, "INSERT INTO `Users` ( `id`, `$phone`, `$email`, `$password`, `confirm_paaword` ) VALUES (NULL,'$phone','$email', '$md5_password', '$md5_password2')");

header("Location: /home.php");
