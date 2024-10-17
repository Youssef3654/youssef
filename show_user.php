<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة تعديل البيانات</title>
</head>
<body>


<div id="users" style="width: 50%;margin:auto;padding-top: 15px;">
    <table class="table table-bordered">
    <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">username</th>
      <th scope="col">password</th>
      <th scope="col">email</th>
      <th scope="col">edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
  <?php
     include "connect.php";
     $select = "SELECT * FROM users";
     $query = mysqli_query($conn , $select);

     if (mysqli_num_rows($query)>0) {
        while ($row = mysqli_fetch_array($query)) {
            echo "<tr>";
            echo "<td>".$row["id"]."</td>";
            echo "<td>".$row["username"]."</td>";
            echo "<td>".$row["password"]."</td>";
            echo "<td>".$row["email"]."</td>";

            // تعديل الفئة هنا
            echo '<td><a href="edit.php?pid='.$row["id"].'" class="btn btn-outline-success" role="button" aria-pressed="true"> edit </a></td>';
            echo '<td><a href="delete.php?pid='.$row["id"].'" class="btn btn-outline-danger" role="button" aria-pressed="true"> delete </a></td>';

            echo "</tr>";
        }
     }
     else {
      echo "NOOO data";
     }
     ?>
  </tbody>
    </table>
  </div>

</body>
</html>