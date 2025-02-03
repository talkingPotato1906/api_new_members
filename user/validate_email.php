<?php
//validate_email.php: 이메일 중복 체크 
include '../connection.php';

$email = $_POST['email'];
$name = $_POST['name'];
$password = md5($_POST['password']);

$sqlQuery = "INSERT INTO talking_potato SET 
email = '$email', name = '$name', password = '$password'";

$resultQuery = $connection -> query($sqlQuery);

//0보다 크면 (1이면 == 이메일 주소가 이미 존재하면) true, 아니면 f 반환
if($resultQuery -> num_rows > 0){
    echo json_encode(array("existEmail" => true));
}else{
    echo json_encode(array("existEmail"=> false));
}