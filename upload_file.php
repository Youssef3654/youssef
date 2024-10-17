<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>رفع الملفات</title>
</head>
<body>
    
<form action="upload.php" method="post" enctype="multipart/form-data">
Select image to upload:
<input type="file" name="fileToUpload" id="fileToUpload"><br><br> 
<input type="submit" value="Upload Image" name="submit"> 
</form>


    <style>
        /* تنسيق النموذج */
form {
    background-color: #f4f4f4;
    border: 1px solid #ddd;
    padding: 20px;
    width: 300px;
    margin: 0 auto;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* تنسيق المدخلات */
input[type="file"] {
    display: block;
    margin: 10px 0;
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    width: 100%;
    box-sizing: border-box;
}

/* تنسيق زر الإرسال */
input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

/* تنسيق النص */
label {
    font-weight: bold;
    margin-bottom: 10px;
    display: block;
}


    </style>
</body>
</html>