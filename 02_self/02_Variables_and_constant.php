<?php

//php loosely typed language 

define('NAME' , 'Ankur'); //constant 

$firstName = "Rajneesh";
// var_dump($firstName);
$lastName = "Singh" ;
$age = 20 ;

$firstName = "Raj"; //Over-ride
// echo "My name is " , $firstName ; 


// define('NAME' , 'Anu'); //Warning: Constant NAME already defined in

$txt = "My name is $firstName . <br>" ;
echo $txt ;
$x= 5;
// var_dump($x);
$y = 10.6;
// var_dump($y);
$z = $x + $y ;
echo "Addition of $x and $y is $z <br>" ;


echo "Hello " . $txt . "bye !";




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Variables Constant</title>
</head>
<body>
    <h1>User Profile Page</h1>
    <div><?php echo " Your Name is " , $firstName ;?></div>
    <div><?php echo " Age is " , $age ;?></div>
    <div><?php echo " Constant Name is " , NAME; ?></div>
</body>
</html>