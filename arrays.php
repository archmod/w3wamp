<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>arrays</title>
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
    <h1>arrays tutorial</h1>
    <div class="newBox">
      <?php $friends = array("Kevin", "Kevin2", "Kevin3", "Dwayne", "Niggato");
      echo "<br />";
      $friends[1] = "ur mom giey";
      echo $friends[0]; ?>
    </div>
    <div class="newBox">
      <h2>using the array count fucntion</h2>
      <p>
        the count is
        <<?php
        $largeMembers = array("Josh", "JoshAgain");
        echo count($largeMembers) ;?>
      </p>

    </div>

    <div class="newBox">
      <form action="arrays.php" method="post">
        Knows php <input type="checkbox" name="codeLanguage[]" value="php" /><br />
        Knows CSS <input type="checkbox" name="codeLanguage[]" value="CSS" /><br />
        Knows javascript <input type="checkbox" name="codeLanguage[]" value="jscript" /><br />
        <input type="submit" />
      </form>
      <br />
      <?php
      $knownLanguages = $_POST["codeLanguage"];
      $knownLanguages[1] = "pearl";
      echo $knownLanguages[0];
      echo "<br />";
      echo "<br />";
      echo $knownLanguages[1];
      echo "<br />";
      foreach ($knownLanguages as $item) {
        echo $item;
        echo "<br />";
      }
       ?>
    </div>

    <div class="newBox">

      <h1>Associative arrays in php</h1>
      <h2>in associative arrays we access values using keys instead of index positions. In this example i used names as keys. The keys all need to be unique.</h2>
      <?php
      $scores = array("Dwayne"=>"D-", "Pam"=>"A+", "Duncan"=>"B+");
      echo $scores["Dwayne"];
       ?>
    </div>
    <div class="newBox">
      <h1>using associative arrays in practice</h1>
      <h2>input either Dwayne Pam or Duncan</h2>
      <form action="arrays.php" method="post">
        <input type="text" name="student" />
        <input type="submit" />
      </form>
      <br /><br />

      <?php
      $grades = array("Dwayne"=>"D-", "Pam"=>"A+", "Duncan"=>"B+");
      echo $grades[$_POST["student"]];
      ?>
    </div>



  </body>
</html>
