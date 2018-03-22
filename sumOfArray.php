<?php

$numbers= array(1, 2, 5, 10, 255, 3);
$sum = 0;

for ($i=0; $i < sizeof($numbers); $i++) {
  $sum +=$numbers[$i];
}
echo $sum;
 ?>
