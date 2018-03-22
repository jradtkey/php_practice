<?php

$list = array("balls", "deep", "in", "yo", "bich");

function print_list($arr)
{
  echo "<ul>";
    foreach ($arr as $value) {
      echo "<li>".$value."</li>";
    }
  echo "</ul>";
}


print_list($list);


 ?>
