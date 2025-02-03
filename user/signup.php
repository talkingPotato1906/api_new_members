<?php
// login.php: 로그인 API
include '../connection.php';

$email = $_POST['email'];
$password = md5($_POST['password']); // 비밀번호 암호화

$sqlQuery = "SELECT * FROM talking_potato WHERE email = '$email' AND password = '$password'";
$resultQuery = $connection->query($sqlQuery);

if ($resultQuery->num_rows > 0) {
    $user = $resultQuery->fetch_assoc();
    echo json_encode(array("success" => true, "user" => $user));
} else {
    echo json_encode(array("success" => false, "message" => "Invalid email or password"));
}
?>
