<?php 
$servername = 'localhost';
$username = "root";
$password = "";
//creates connection
$conn = new mysqli($servername, $username, $password);
//checks the connection

if ($conn->connect_error) {
	die("connection failed: " . $conn->connect_error);
}

//create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
	echo "database created successfully";
	} else {
	echo "error creating database: " . $conn=error;
	}
$conn->close();
?>