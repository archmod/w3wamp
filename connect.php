<?php
// instead of using $servername the servername was directly passed into the mysqli function
$user = 'root';
$pass = '';
$db = 'playgrounddb';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");

echo"great work!!!";
//this step is nessecary when connecting to any mysql server. From here now that we are connected we can edit table data


?>