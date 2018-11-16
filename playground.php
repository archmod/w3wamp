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
    <div>
    <h1>php playground</h1>

    <?php
    echo "<h2>printed using echo</h2>";
    $thisVariable = "a variable i set";
    echo "<h2>my variable stores $thisVariable</h2>"
    ?>

    <div class="newBox">
      <h2>Plan is to make a form and use a php get function</h2>
      <p>
        note that "name" is used for php and id is used for js. I have just created a get method app/function in php however this is also not very secure. this data is stored inside the  url. GET is ;also only able to request data not modify it.
      </p>
      <form action="playground.php" method="get">
        Name: <input type="text" name="name"/>
        <br /> <br />
        Age: <input type="number" name="age" />
        <br /> <br />
        <input type="submit" />
      </form>

      <br /><br />
      <?php
      echo $_GET["name"];
      echo "<br />";
      echo $_GET["age"];
       ?>

    </div>

  </div>
  </body>
</html>
