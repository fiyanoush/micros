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

$name = $_POST['name'];
$housename = $_POST['housename'];
$place = $_POST['place'];
$phoneno = $_POST['phoneno'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO registration (`name`, housename, place, phoneno, email, `password`)
VALUES ('$name', '$housename', '$place', '$phoneno', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 
?>  