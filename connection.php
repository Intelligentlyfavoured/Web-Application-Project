<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="Phpproject";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO patients (first_name, email, phone, last_name)
VALUES ('John', 'john@example.com', 6574843, 'Doe')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

