<?php

//function 

function sayHello(){
    echo "Good Evening , Raj";
    echo "<br>";
}


sayHello();


function sayHi($name){
    echo "Good Evening , $name";
    echo "<br>";
}

sayHi("Rohan");

//default value in function
function sayHi2($name = 'Rajneesh'){
    echo "Good Evening , $name";
    echo "<br>";
}

sayHi2();


//format product 

function formatProduct($product){
    echo "{$product['name']} costs Rs.{$product['price']} to buy <br> ";
}


formatProduct(['name' => "Earphones" , 'price' => 2000]);


//return in function

function formatProduct2($product){
    return "{$product['name']} costs Rs.{$product['price']} to buy <br> ";
}

$formatted = formatProduct2(['name'=>'MacbookAIr' , 'price' => 140000]);

echo $formatted;


function hi($name = "Raj" , $time = "night"){
    echo "Good $time , $name";
    echo "<br>";
}

hi();

hi('Mom');

hi('Rohan' , 'Morning');
?>