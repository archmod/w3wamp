<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>php functions</title>
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
    </ul>
  </nav>
  <body>
    <h1>Learning about php functions</h1>
    <div class="newBox">
      <?php
      function sayHi($name) {
        echo "hello, $name . I just made a function and called it";
      }
      sayHi("Josh");
      ?>
      <br /><br />

      <?php
      function userDetails($name, $age) {
        echo "Hello $name , you are $age years old <br />";
      }
      userDetails("Josh", "19");
      userDetails("Jen", "50");
      userDetails("Damo", "100"); ?>

    </div>

    <div class="newBox">
      <h1>returns in functions. going to cube a number</h1>

      <?php
      function cuber($numCube) {
         return $numCube * $numCube * $numCube;
      }

      $cubeResult = cuber(3);
      echo $cubeResult;
      echo "<br />";
      echo cuber(13);
      ?>
      <p>
        return breaks the function almost. Lets say you have echo "hello"; after your return statement it will not be printed when the function is called.
      </p>
    </div>

  </body>
</html>
