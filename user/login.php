<?php
//login.php: 로그인 다루는 api
include '../connection.php';

$email = $_POST['email'];
$name = $_POST['name'];
$password = md5($_POST['password']);

$sqlQuery = "INSERT INTO talking_potato SET 
email = '$email', name = '$name', password = '$password'";

$resultQuery = $connection -> query($sqlQuery);

