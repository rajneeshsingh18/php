<?php

// conditional statement 

$price = 20 ;

// if($price < 10 ){
//     echo "PRICE IS LESS THAN 10 ";
// }elseif($price < 30 ){
//     echo "Else if is condition is met";
// }
// else{
//     echo  "PRICE IS GREATER THAN 10" ;
// }

$products = [  
    ['Item'=> 'Rose' , 'Price' => 13 , 'Quantity'=>'45'] ,
    ['Item'=> 'Tomato' , 'Price' => 32 ,'Quantity'=> '73' ] , 
    ['Item'=> 'Cabbage' , 'Price' => 38 ,'Quantity'=>' 43'] ,
    ['Item'=> 'Onion' , 'Price' => 43 ,'Quantity'=>'10']
];


foreach($products as $product){

    // if($product['Price'] < 40  && $product['Price'] > 15){
    //     echo $product['Item'] . "<br>";
    // }

    if($product['Price'] > 40  || $product['Price'] < 15){
        echo $product['Item'] . "<br>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            <?php foreach($products as $product){ ?>
                <?php if($product['Price'] > 40 || $product['Price'] <15 ){ ?>
            <li> <?php echo $product['Item']; ?> </li>
           

                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</body>
</html>