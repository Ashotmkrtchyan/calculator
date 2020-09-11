<?php
session_start();

$db = new PDO("mysql:dbname=history;host=localhost", 'root', '');
$statement = $db->query('SELECT * FROM users');
$users = $statement->fetchAll(PDO::FETCH_ASSOC);

//if ($_POST['param']){
//$param = json_decode($_POST['param']);
//    echo ($param);
//     echo  json_encode($param);
//
//     exit();
//} else{
//    echo "net";
//}
