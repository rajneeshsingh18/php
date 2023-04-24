<?php

$a = "10";
$b = 10;

echo "Value of a is " . "$a" ;
echo "<br>";
echo var_dump($a) . " -->Type of a  " ;
echo "<br>";
echo "Value of b is " . "$b"  ;
echo "<br>";
echo var_dump($b) . " -->Type of B " ;
echo "<br>";


if ($a == $b) {
  echo "The variables are equal using the equality operator.";
} else {
  echo "The variables are not equal using the equality operator.";
}
echo "<br>";

if ($a === $b) {
  echo "The variables are identical using the identity operator.";
} else {
  echo "The variables are not identical using the identity operator.";
}
?>