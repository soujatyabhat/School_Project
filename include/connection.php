<?php
$host = "localhost";
$name = "root";
$pass = "";
$database = "school";
$conn  = mysqli_connect($host,$name,$pass,$database);
if (!$conn)
    echo "Data Error !!";
?>