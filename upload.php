<?php
/*
$target_dir = "uploads/";  // تحديد مسار المجلد الذي سيتم رفع الملفات إليه
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// التحقق مما إذا كان الملف هو صورة حقيقية
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "الملف هو صورة - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "الملف ليس صورة.";
        $uploadOk = 0;
    }
}

// التحقق من حجم الملف
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "عذرًا، حجم الملف كبير جدًا.";
    $uploadOk = 0;
}

// السماح بتحميل أنواع محددة من الملفات فقط
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" 
&& $imageFileType != "gif" ) {
    echo "عذرًا، فقط الملفات من نوع JPG و JPEG و PNG و GIF مسموح بها.";
    $uploadOk = 0;
}

// التحقق مما إذا كان $uploadOk يساوي 0 (فشل التحقق) أو محاولة رفع الملف
if ($uploadOk == 0) {
    echo "عذرًا، لم يتم رفع الملف.";
// إذا كان كل شيء على ما يرام، محاولة رفع الملف
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "تم رفع الملف ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " بنجاح.";
    } else {
        echo "عذرًا، حدث خطأ أثناء رفع الملف.";
    }
}
    */











    
if(isset($_POST['submit'])){

    $pic=$_FILES["fileToUpload"];

    $picname=$pic["name"];

    $pictmp= $pic["tmp_name"];

    include 'connect.php';

    $insert="INSERT INTO upload(file_name) VALUES ('$picname')";

    $query= mysqli_query($conn, $insert);

    if($query) {
    mkdir("Attachments");

    move_uploaded_file($pictmp, "Attachments/$picname");

    echo '<script>alert("تم الرفع");window.location.assign("upload_file.php");</script>';
    }

}
header("location:ho.php");
?>
