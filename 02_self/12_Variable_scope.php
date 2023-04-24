<?php
//Variable scope 

//loacl vars

function myFunc(){
    $price = 10 ;
    echo $price ;
}


myFunc();
// echo $price; //Warning: Undefined variable $price


function myAge($age){
    echo $age;
}

myAge(20);

//global variable 
$name = "Raj";

// function sayHello(){
//     global $name;
//     $name = "Rohan";
//     echo "Hello $name";
// }

// sayHello();

// echo $name;

// function sayBye($name){
//     $name = "Rajneesh";
//     echo "Bye $name";
// // }
// sayBye2($name);
// echo $name;

function sayBye2(&$name){
    $name = "Rajneesh";
    echo "Bye $name";
}

sayBye2($name);
echo $name;
?>