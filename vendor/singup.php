<?php
session_start();
require_once 'connect.php';

$Enter_login = $_POST['Enter_login'];
$Confirm_login = $_POST['Confirm_login'];
$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `ip` = '$Enter_login'");

if ($Enter_login === $Confirm_login && mysqli_num_rows($check_user) == 0) {
    mysqli_query($connect, "INSERT INTO `users` (`id`, `ip`, `hitory`) VALUES (NULL, '$Enter_login', '')");
    $_SESSION['message'] = 'registration completed successfully';
    header('Location: ../index.php');
} else {
    $_SESSION['message'] = 'login does not match';
    header('Location: ../view/registration.php');
}