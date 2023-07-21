<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="drug_dispensation";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql ="INSERT INTO medicine(Medcode,Medicine_name,Type,Quantity,Price,Expiry_date)
    VALUES('1001','Panadol','Painkiller',100 ,5,'12/03/23')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

?>


