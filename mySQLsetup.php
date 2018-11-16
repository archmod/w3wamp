<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>php playground</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <nav>
    <ul class="navList">
      <li>
        <a class="navLink" href="playground.php">playground</a>
      </li>
      <li>
        <a class="navLink" href="jungle.php">Jungle</a>
      </li>
      <li>
        <a class="navLink" href="arrays.php">Arrays</a>
      </li>
      <li>
        <a class="navLink" href="functions.php">Functions</a>
      </li>
      <li>
        <a class="navLink" href="mySQLsetup.php">mySQL</a>
      </li>
    </ul>
  </nav>
  <body>
    <h1>Follwing the tutorials point tutorial on MySQL. Attmepting to connect this page to a MySQL server.</h1>

    <?php
    //basic connection to a test database made in the console. Before connecting I opened the MySQL console created newtestdb, then "use newtestdb;"
    $ser="localhost";
    $user="root";
    $pass="";
    $db="newtestdb";

    $con=mysqli_connect($ser, $user, $pass, $db) or die ("Connection failed");
    echo "Connection success"; ?>

  </body>
</html>
