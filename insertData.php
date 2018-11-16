<?php

/*
Rules
The SQL query must be quoted in PHP
String values inside the SQL query must be quoted
Numeric values must not be quoted
The word NULL must not be quoted
*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Josh', 'Beercan', 'josh@duff.com.au')";

if ($conn->query($sql) === TRUE) {
	echo "new record created successfully";
} else {
	echo "error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>