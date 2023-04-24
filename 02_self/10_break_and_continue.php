<?php

$products = [  
    ['Item'=> 'Rose' , 'Price' => 13 , 'Quantity'=>'45'] ,
    ['Item'=> 'Tomato' , 'Price' => 32 ,'Quantity'=> '73' ] , 
    ['Item'=> 'Cabbage' , 'Price' => 20 ,'Quantity'=>' 43'] ,
    ['Item'=> 'Onion' , 'Price' => 43 ,'Quantity'=>'10']
];

foreach($products as $product){

    if($product['Item'] === 'Onion'){
        break;
    }

    if($product['Price'] > 30 ){
        continue ;
    }


    echo $product['Item'] . '<br>';
}

?>