<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة ترحيب</title>
    <?php



echo "<h1>"." شكرًا لتقديم طلبك! نحن نعمل حاليًا على معالجته، وسنوافيك بالتحديثات في أقرب وقت ممكن. إذا كان لديك أي استفسار أو تعديل على الطلب، لا تتردد في التواصل معنا  "."</h1>";
     header("Refresh: 4; url=upload_file.php");












?>
</head>
<body>
    <style>
        body {
  font-family: 'Arial', sans-serif;
  background-color: #f4f6f9;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
}

.welcome-message {
  background-color: #007bff;
  color: white;
  padding: 20px 40px;
  border-radius: 10px;
  box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
  font-size: 24px;
  font-weight: bold;
  text-align: center;
  transition: transform 0.3s ease;
}

.welcome-message:hover {
  transform: scale(1.05);
  background-color: #0056b3;
}

    </style>

</body>
</html>