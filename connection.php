<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentregister";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student (fname, email, address,phone,parents)
VALUES ('Zarif', 'zarif@example.com', 'Uttara,Dhaka','0123456789','0134567890')";


if ($conn->query($sql) === TRUE) {
  echo "Welcome to the Student Centre!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
