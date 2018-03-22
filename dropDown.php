<?php

$states = array('CA', 'WA', 'VA', 'UT', 'AZ');
$newStates = array('CA', 'WA', 'VA', 'UT', 'AZ', 'NJ', 'NY', 'DE');

echo "<select>";
for ($i=0; $i < sizeof($states); $i++) {
  echo "<option>".$states[$i]."</option>";
}
echo "</select>";


echo "<select>";
foreach ($states as $state) {
  echo "<option>".$state."</option>";
}
echo "</select>";

echo "<select>";
foreach ($newStates as $state) {
  echo "<option>".$state."</option>";
}
echo "</select>";


 ?>
