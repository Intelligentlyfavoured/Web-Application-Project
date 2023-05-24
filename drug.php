<?php
$username ="root";
$password="";
$database="Phpproject";
$servername="localhost";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn -> connect_error){
    die ("connection failed" . $conn->connect);
    
}
    echo "Connected successfully";
$sql = "INSERT INTO medicine (Medcode, Name, Type, Quantity, Price, ExpiryDate)
VALUES (1002, 'Actal','Painkiller','24','15','23/6/26')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();    

?>



