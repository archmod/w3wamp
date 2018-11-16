<?php 
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $pass, $dbname);
if ($conn->connect_error) {
	die("dead, connection faled" . $conn->connect_error);
}
//using the mysqli multi query we can insert mutiple data values in one go
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@example.com')";


//using multi_query here
if ($conn->multi_query($sql) === TRUE) {
	$last_id = $conn->insert_id;
	echo "New record created successfully. The last inserted ID is: " . $last_id ;
} else {
	echo "Error: " . $sql . "<br />" . $conn->error;
}

$conn->close();
?>