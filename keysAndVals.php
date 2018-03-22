<?php

$users['first_name'] = "Michael";
$users['last_name'] = "Choi";

function keyVals($list){
  echo "There are ".sizeof($list)." keys in this array<br>";
  foreach ($list as $key => $value) {
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$key."<br>";
  }
  foreach ($list as $key => $value) {
    echo "The value in the key '".$key."' is '".$value."'<br>";
  }
}

keyVals($users);

 ?>
