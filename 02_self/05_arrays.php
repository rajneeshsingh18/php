<?php

//indexed arrays

$cars = [ 'honda' , 'BMW' , 'Audi'];

// echo $cars ; //error

echo $cars[2] . "<br>";
echo $cars[0] . "<br>";

$bikes = array('hero' , 'yamaha' , 'ola');

echo  $bikes[1] . "<br>";

$ages = [20 , 34, 12, 43];

// echo $ages; //-->gives error

print_r($ages) ;

echo "<br>";

$ages[1] = 26;
print_r($ages) ;

echo "<br>";

//Adding values to the array
$ages[] = 60 ;
print_r($ages);

//array methods

echo "<br>";

array_push($ages , 69);
print_r($ages);

echo "<br>";

echo array_pop($ages);
print_r($ages);

echo "<br>";
echo count($ages);

echo "<br>";
//how to merge to array 

$array1 = ['hello' , 'hi' , 'bye'];
$array2 = ['5' , '3' , '6'];

$array3 = array_merge($array1 , $array2);
print_r($array3);

echo "<br>";

//associative arrays --> key => value pair 

$names = ['raj' => 19 , 'ankur' => 20 , 'yashwant' => 18 ];
print_r($names);

echo "<br>";

echo $names['ankur'];

echo "<br>";

$bikesModel = ['yahama' => 'R10' , 'Hero' => 'Splender' , 'Honda' => 'Shine'];
print_r($bikesModel);

echo "<br>";

$bikesModel_2 = array('yah' => 'R1012' , 'H' => 'Splender12' , 'Hon' => 'Shine13');
print_r($bikesModel_2);

echo "<br>";

$names['Narayan']= '20' ;
$names['Narayan']= '22' ;
print_r($names);

echo "<br>";

echo count($names);

echo "<br>";

$bike_merge = array_merge($bikesModel , $bikesModel_2);

print_r($bike_merge);



?>