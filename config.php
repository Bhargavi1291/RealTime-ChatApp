<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "chat";

   $conn = new mysqli($servername, $username, $password, $dbname);

     // Check connection
     if (!$conn){
        echo "Database Created".mysqli_connect_error();
     }
?>