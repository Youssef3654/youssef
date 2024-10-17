<?php

include 'Connect.php';

$id = $_GET["pid"];

$del="DELETE FROM users where id='$id'";

$query= mysqli_query($conn, $del);

if($query) {
echo '<script>alert("Delete successfully");window.location.assign("show_user.php");</script>';
}

?>