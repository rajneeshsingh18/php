<?php
$names= ["Shaan" , "Rajneesh" , "Ankur"];



//for loop 

for($x=0 ; $x < count($names) ; $x++ ){
    echo $names[$x]."   ";
}

echo "<br>";

for($i=0 ; $i<5 ; $i++){
    echo "Hi Rajneesh";
    echo "<br>";
}

$a = [4,7,3,7,44,65,45,7,5636,782,46,6,3];

for($j=0 ; $j<count($a) ; $j++){
    echo $a[$j] . "<br/>";
}


//for each 

foreach($a as $item){
    echo $item . " ";
    // echo "Holla";
    // echo "<br>";
}

foreach($names as $name){
    echo $name . '<br>';
}


$products = [  
    ['Item'=> 'Rose' , 'Price' => '$13' , 'Quantity'=>'45'] ,
    ['Item'=> 'Tomato' , 'Price' => '$32' ,'Quantity'=> '73' ] , 
    ['Item'=> 'Cabbage' , 'Price' => '$38' ,'Quantity'=>' 43'] ,
    ['Item'=> 'Onion' , 'Price' => '$43' ,'Quantity'=>'10']
];

foreach($products as $product){
    echo $product['Item'] . '-->' . $product['Quantity'];
    echo '<br>';
}


//while loop

$y=0;
while($y < count($products)){
    echo $products[$y]['Price'] ;
    echo '<br/>';
    $y++; //if we not increment overhere infinite loops runs 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<body>
    <h1>Products<h1/>
    <ul>
    <?php foreach($products as $product){?>

        <h3> <?php echo $product['Item']; ?> </h3>
        <p>  <?php echo $product['Price']; ?></p>
        
        <?php } ?>
   
    </ul>
</body>
</html>