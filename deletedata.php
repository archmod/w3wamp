<?php 
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $pass, $dbname);
if ($conn->connect_error) {
	die ("Connection failed " . $conn->connect_error);
}
$sql = "DELETE FROM MyGuests WHERE id=3";

if ($conn->query($sql) === TRUE) {
	echo "record deleted successfully";
} else {
	echo "error deleting record " . $conn->error;
}

$conn->close();

?>