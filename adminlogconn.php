<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="micros";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "select *from adminlogin where email = '$email' and password = '$password'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);  
  
if($count == TRUE){  
 header('LOCATION:home.html');
}  
else{  
  echo "<h1> Login failed. Invalid username or password.</h1>";  
}


?>