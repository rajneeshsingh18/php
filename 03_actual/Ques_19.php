<?php
$string = "hello ## this ## is ## php ## programming";
$array = explode("##", $string);
foreach($array as $index => $element) {
  echo "Array[" . $index . "] = " . $element . "<br>";
}
?>