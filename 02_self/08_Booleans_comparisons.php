<?php

//booleans in php

// echo true ;  //"1"
echo false ; //" "


// PHP Comparison Operators

//-->    ==  , === , !=  , <>  , !== , > , >= , <= , <=>

$x = 5 ;
$y = "5";
$z = 7;

//-->loose and strict comparison
// echo $x == $y;
// echo var_dump($x == $y); //true
// echo var_dump($x===$y);    //false
// echo $x === $y;

echo var_dump($x<>$z); //Returns true if $x is not equal to $z
// echo $z>= $x;

//strings comparsion

echo 'Shaan' < 'Rajneesh'; //fasle --> " "
echo 'Shaan' > 'Rajneesh'; //1
echo 'rajneesh' > 'Rajneesh'; //1
echo 'mario' == 'Mario'; //false --> " "
echo 'Rajneesh' === 'Rajneesh'; //1


echo true == "1"; //1
echo false == " "; //" "
?>