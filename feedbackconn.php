<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "micros";

$conn = mysqli_connect($servername, $username, $password, $dbname);

  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message = $_POST['message'];


$sql = "INSERT INTO feedback (`fname`, `lname`, `email`, `mobile`, `message`)
VALUES ('$fname', '$lname', '$email', '$mobile', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>  