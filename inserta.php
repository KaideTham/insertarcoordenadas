<?php

require './conecta.php';
$lati = $_GET["latitud"];
$long = $_GET["longitud"];

$sql = "INSERT INTO desacato (latitud, longitud)
VALUES ('".$lati. "','".$long."');";

/* insert.php?&latitud=23&longitud=76 */


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

echo $sql ;

?>


