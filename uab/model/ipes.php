<?php
$servername = "localhost";
$username = "ciclope";
$password = "ciclope";
$dbname = "ciclope";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "SELECT sigla, lat, log FROM ipes";
$result = $conn->query($sql);
$rows = array();

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc())
    $rows[]=$row;
} 

print json_encode($rows);

mysqli_close($conn);
?>