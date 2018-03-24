<?php

  session_start();

  if (!isset($_SESSION['number'])) {
    $_SESSION['number'] = rand(1,100);
  }

  if(isset($_POST['action']) && $_POST['action'] == "guess"){

    if ($_SESSION['guess'] < $_SESSION['number']) {
      $_SESSION['output'] = "<div class='redBox'>Too low!</div>";
    }
    elseif ($_SESSION['guess'] > $_SESSION['number']) {
      $_SESSION['output'] = "<div class='redBox'>Too high!</div>";
    }
    elseif ($_SESSION['guess'] == $_SESSION['number']) {
      $_SESSION['output'] = "<div class='greenBox'>You guessed it right!</div>";
    }

    $guess = $_POST['guess'];

    $_SESSION['guess'] = $guess;

  }

  if(isset($_POST['action']) && $_POST['action'] == "reset") {
    $_SESSION['number'] = rand(1,100);
  }






  header('location: index.php');
 ?>
