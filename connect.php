<?php
define("servername" , "localhost");
define("username" , "root");
define("password" , "");
define("dbname" , "data base");

@$conn = mysqli_connect(servername , username, password , dbname);

if (!$conn) {
    echo "connection failde";
}

else {
    #echo "connection ok";
}
?>