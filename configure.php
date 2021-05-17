<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "basic banking system";

$conn = mysqli_connect($servername, $username, $password, $dbname);

   if($conn){
       echo"Successfuly connected to database <br>";
   }
   else{
       echo"Failed to connect to database";
   }
?>