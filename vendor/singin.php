<?php

session_start();
require_once 'connect.php';

$Enter_login = $_POST['Enter_login'];
$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `ip` = '$Enter_login'");
if (mysqli_num_rows($check_user) > 0){
    mysqli_query($connect, "INSERT INTO `users` (`id`, `ip`, `hitory`) VALUES (NULL, '', '$historey')");
    header('Location: ../view/Calculate_view.php');
}else{
    $_SESSION['message'] = 'invalid login';
    header('Location: ../index.php');
}

