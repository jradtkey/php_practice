<?php

$A = array(2,4,10,16);
function multiply($arr, $num)
{
  $newArr = array();
  foreach ($arr as $value) {
    array_push($newArr, $value*$num);
  }
  return $newArr;
}

$B = multiply($A, 2);

var_dump($B);


 ?>
