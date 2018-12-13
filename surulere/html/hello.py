<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="GET">
      <input type="text" name="names" value="enter name here">
      <button type="button" name="button">SUBMIT</button>

    </form>
    <?php

    $profile = $_GET['names'];

    echo $profile."is an handsome boy";

     ?>

  </body>
</html>
