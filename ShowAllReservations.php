<?php

$servername = "localhost";
$username = "root";
$password = "";

$dbname = "culturecenterdb";
$username =$_POST["username"];
$password =$_POST["password"];


echo "Your comment has been added:     ";
echo $newcomment;
echo "<br>";
echo "<br>";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO commentstable (comments) VALUES ('$newcomment')";

    // use exec() because no results are returned
    $conn->exec($sql);
  
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
include 'commentspage.php';		
?>

