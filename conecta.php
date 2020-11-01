<?php
$servername = "rds-bracelife.c2kjodxyeh08.us-east-1.rds.amazonaws.com";
$database = "bracelife";
$username = "KaideTham";
$password = "Kaide5161939";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$lati = $_GET["latitud"];
$long = $_GET["longitud"];

echo $lati." - ".$long;
/*

$sql = "INSERT INTO coordenadas (lat, lon)
VALUES ('".$lati. "','".$long."');";

// conecta.php?&latitud=23&longitud=76 

echo $sql;

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo $sql ;*/

?>