<?php
//   define('DB_SERVER', 'localhost:3036');
  // define('DB_USERNAME', 'root');
   //define('DB_PASSWORD', '');
   //define('DB_DATABASE', 'culturecenterdb');
//   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "culturecenterdb";
//$username =$_POST["username"];
//$password =$_POST["password"];
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
?>