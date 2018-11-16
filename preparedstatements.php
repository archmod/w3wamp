<?php 
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $pass, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

//using prepared statements
//advantages are that it is more efficient and uses less bandwidth

//preparing the bind 
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?,?,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);
//the sss paramater lists the types of data that the paramaters are 
// by telling SQL what type of data to expect we minimize the risk of SQL injections 
//set parameters and execute
$firstname = "Moyzesz";
$lastname = "ANGLISTER";
$email = "ANGLISTER@gmail.com";
$stmt->execute();

$firstname = "Dawid";
$lastname = "AUSUBEL";
$email = "AUSUBEL@gmail.com";
$stmt->execute();

$firstname = "Abraham";
$lastname = "BANKIER";
$email = "Abraham@gmail.com";
$stmt->execute();

echo "new records created successfully luftwaffer";

$stmt->close();
$conn->close();

?>