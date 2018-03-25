<?php

  session_start();

  $errors = array();
  if (isset($_POST['email']) && $_POST['email'] != null) {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Please enter valid email";
    }
  } else {
    $errors[] = "Email should not be empty";
  }

  if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('location: index.php');
  } else {
    echo "You are logged in.";
  }

 ?>
