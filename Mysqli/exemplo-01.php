<?php

$conn = new mysqli("localhost","root","","dbphp7");
if($conn->connect_error)
{
    echo "error: ".$conn->connect_error;
    exit;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) VALUES(?,?)");
$stmt->bind_param("ss", $login, $pass);

$login = "user";
$pass = "12345";

$stmt->execute();

$login = "root";
$pass = "54321";

$stmt->execute();
?>