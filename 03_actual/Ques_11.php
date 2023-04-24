<?php
$string = "The quick brown fox jumps over the lazy dog";
$substring = "fox";
if (strpos($string, $substring) !== false) {
  echo "The string contains the substring!";
} else {
  echo "The string does not contain the substring.";
}
?>