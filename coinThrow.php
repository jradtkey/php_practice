<?php

function toss($times)
{
  $heads = 0;
  $tails = 0;
  for ($i=0; $i < $times; $i++) {
    $flip = rand(1,2);
    if ($flip == 1) {
      $outcome = "It's a head!";
      $heads++;
    }
    else {
      $outcome = "It's a tail!";
      $tails++;
    }
    $attempt = $i + 1;
    echo "Attempt #".$attempt.": Throwing a coin... ".$outcome." Got ".$heads." heads so far and ".$tails." tails so far.<br>";
  }
}


toss(500)

 ?>
