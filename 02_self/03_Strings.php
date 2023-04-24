<?php

$Email = "abc@gmail.com";

$string =  "helloworld@gmail.com";

// echo $Email;
// echo $string;

//string concatenation
// echo $Email . $string ;

$name = "Rajneesh";

// echo "Hello , my name is " . $name ;
// echo 'Hello  my name is  $name ';
// echo "Hello  my name is  $name ";

//--> single and diuble quotes
// echo "Hi you seemed horible \" SU \" Yuuuuu ";
// echo 'Hi you seemed horible " SU " Yuuuuu ';

// echo $name[1];

// echo strlen($name);
// echo strtoupper($name);
// echo strtolower($name);
$replaced = str_replace('e','ih',$name);
echo $replaced;

?>