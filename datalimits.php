<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $pass, $dbname);
if ($conn->connect_error) {
	die ("failed to connect : " . $conn->connect_error);
}
// using the following code to select all of the data and display it on the page 
$sql = "SELECT id, firstname, lastname FROM MyGuests LIMIT 15, 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	//output the data of each row
	while($row = $result->fetch_assoc()) { //fetch_assoc puts all the items into an associative array
		echo "id: " . $row["id"]. " - Name: " . $row["firstname"] . " - Last Name: " . $row["lastname"]. "<br />";
	} 
} else {
	echo "0 results found";
}

$conn->close();
 ?>