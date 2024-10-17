<!DOCTYPE html>
<?php
if (isset($_GET["pid"])) {
    $id=$_GET["pid"];
    include "connect.php";
    $select = mysqli_query($conn, "select * from users where id='$id'");
    $row = mysqli_fetch_array($select);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة تعديل المعلومات</title>
</head>
<body>
    <form action="update.php" metohd="post">
        username:<input type="text" name="username" value="<?php echo $row ["username"] ; ?>">
        <br><br>

        password:<input type="text" name="password" value="<?php echo $row ["password"] ; ?>">
        <br><br>

        email:<input type="text" name="email" value="<?php echo $row ["email"] ; ?>">
        <br><br>

        <input type="hidden" name="id" value="<?php echo $row ["id"] ; ?>">

        <input type="submit">
    </form>





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

        /* تنسيق صندوق التعديل */
        .form-container {
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
        input[type="text"], input[type="password"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        /* تنسيق الزر */
        input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* تنسيق الفواصل */
        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

    </style>





</body>
</html>
<?php
}else {
    header("location:show.php");
}

?>