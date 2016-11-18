<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "culturecenterdb";
$user =$_POST["username"];


//echo "Your username and password have been accepted.";
//echo "$fname";
//echo "$lname";
//echo "$user";
//echo "$pwd";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM users WHERE username='$user'";

    // use exec() because no results are returned
    $conn->exec($sql);
  
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


include 'AdministrationPage.html';	
?>
<script>
alert("The account was deleted successfully.");
</script>