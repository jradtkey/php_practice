<?php
  session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Great Number Game</title>
    <style media="screen">
      h1, h2, h4{
        text-align: center;
      }
      form {
        text-align: center;
      }

      .redBox{
        background-color: red;
        color: white;
        text-align: center;
        height: 100px;
        width: 100px;
        padding: 68px;
        margin-left: 41%;
      }

      .greenBox{
        background-color: green;
        text-align: center;
        height: 100px;
        width: 100px;
        padding: 68px;
        margin-left: 41%;
      }
    </style>
  </head>
  <body>

    <h1>Welcome to the Great Number Game</h1>

    <h2>I'm thinking of a number between 1 and 100</h2>
    <h4>Take a guess:</h4>
    <form action="process.php" method="post">
      <input type="hidden" name="action" value="guess">
      <input type="text" name="guess">
      <input type="submit">
    </form><br>
    <?php echo $_SESSION['output'] ?>

    <form action="process.php" method="post">
      <input type="hidden" name="action" value="guess">
      <input type="submit">
    </form>

  </body>
</html>
