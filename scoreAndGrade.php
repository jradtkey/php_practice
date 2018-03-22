<?php

$score = rand(50,100);

switch ($score) {
  case ($score < 70):
    echo "<h1>Score: ".$score."</h1><br><h2>Grade: D";
    break;
  case ($score > 70) && ($score < 80):
    echo "<h1>Score: ".$score."</h1><br><h2>Grade: C";
    break;
  case ($score > 80) && ($score < 90):
    echo "<h1>Score: ".$score."</h1><br><h2>Grade: B";
    break;
  case ($score > 90) && ($score < 100):
    echo "<h1>Score: ".$score."</h1><br><h2>Grade: A";
    break;
}


 ?>
