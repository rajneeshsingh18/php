<?php
$string = "the quick brown fox jumps over the lazy dog";
$newString = preg_replace('/the/i', 'That', $string ,1);
echo $newString;
?>