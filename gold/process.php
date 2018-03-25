<?php

  session_start();

  if (!isset($_SESSION['activities'])) {
    $_SESSION['activities'] = array();
  }

  if (isset($_SESSION['yourGold'])) {

    if ($_POST['building']='farm') {
      $amount = rand(10,20);
      $_SESSION['yourGold']+= $amount;
      array_push($_SESSION['activities'], "You added ".$amount." coins.");
      header('location: index.php');
    }


  }


 ?>
