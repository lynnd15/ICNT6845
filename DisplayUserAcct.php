<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

$dbname = "culturecenterdb";
$user = $_POST["user"];
//$pwd = $_POST["pwd"];
$fname = $_POST["fname"];
//$lname = $_POST["lname"];


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE username = '$user'";		


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "Username: " . $row['username']. "<br>";
		 echo "First Name: " . $row['fname']. "<br>";
		  echo "Last Name: " . $row['lname']. "<br>";
		   echo "password: " . $row['password']. "<br>";
    }
} else {
    echo "0 results";
}





echo "Your new first name is '$fname'";

	



mysqli_close($conn);
//include 'Modifyuserpart2.html';	
?>  

</body>
</html>