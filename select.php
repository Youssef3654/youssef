<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<?php
if (isset($_POST["Login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    include "connect.php";

    $select = "select * from users where username='$username'";
    $query = mysqli_query($conn , $select);

    if (mysqli_num_rows($query)>0) {
        $row = mysqli_fetch_array($query);
        if ($row["password"] == $password) {
            session_start();
            $_SESSION["username"]=$username;
            header("location:home.php");
        }

        else {
            echo "<h1>"."خطآ في الباسورد"."</h1>";
        }
    }

    else {
        echo "<h1>"."اسم المستخدم غير مسجل بلنظام"."</h1>";
    }
    
}
?>


<style>
        /* تنسيق الصفحة العامة */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* تنسيق صندوق تسجيل الدخول */
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        /* تنسيق العناوين */
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        /* تنسيق الحقول */
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* تنسيق الزر */
        button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }

        /* تنسيق النصوص التحذيرية */
        .error-message {
            color: red;
            text-align: center;
            margin-top: 10px;
        }

    </style>
</body>
</html>