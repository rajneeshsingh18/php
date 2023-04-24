<?php
$numbers = array(3, 1, 4, 1, 5, 9, 2, 6, 5, 3);
sort($numbers);
echo "Sorted array: ";
foreach ($numbers as $num) {
  echo $num . " ";
}
?>