<?php

  session_start();

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
  </head>
  <body>
    <form action="process.php" method="post">
      <input type="text" name="email" placeholder="email">
      <input type="password" name="password" placeholder="password">
      <input type="submit">
    </form>
    <?php

      if (isset($_SESSION['errors'])) {
        foreach ($_SESSION['errors'] as $error) {
          echo $error;
        }
        $_SESSION = array();
      }

     ?>
  </body>
</html>
