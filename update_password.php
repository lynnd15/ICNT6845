<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "culturecenterdb";

$user=$_POST["user"];
$pwd=$_POST["pwd"];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE users SET password='$pwd' WHERE username='$user'";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    //echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
include 'ModifyUser.html';	

?>
<script>
alert("Password updated successfully.");
</script>