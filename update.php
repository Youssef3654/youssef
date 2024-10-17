<?php

$username = $_POST["username"]; 
$password = $_POST["password"]; 
$email = $_POST["email"]; 
$id = $_POST["id"];

include 'connect.php';

$update = mysqli_query($conn, "update users set username='$username', password='$password', email='$email' where id='$id'");

if($update) {
echo '<script>alert("تم التعديل بنجاح");window.location.assign("show_user.php");</script>';
}
?>