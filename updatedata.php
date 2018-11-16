<?php 
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $pass, $dbname);
if ($conn->connect_error) {
	die ("Connection failed " . $conn->connect_error);
}
$sql = "UPDATE MyGuests SET lastname='GrIfFiN' WHERE id=2";

if ($conn->query($sql) === TRUE) {
	echo "record updated successfully";
} else {
	echo "error updating record " . $conn->error;
}

$conn->close();

?>