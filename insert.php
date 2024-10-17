<?php
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

include "connect.php";

if (isset($_POST["SingUp"])) {
    $sql = "INSERT INTO users (username,password,email) 
    
    VALUES ('$username','$password','$email')";

    if ($conn->query($sql) === TRUE) {
        echo " You have successfully subscribed. ";
    }

    else {
        echo "Error".$sql."<br>".$conn->error;
    }
}
$conn->close()
?>