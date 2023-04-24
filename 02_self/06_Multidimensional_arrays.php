<?php
$employee = array( 
                array(11 , 'Rajneesh' , 78243),
                array(87 , 'Narayan' , 82449),
                array(19 , 'Ankur' , 32844)
            );

print_r($employee);



// echo $employee[1][2];



// for($row= 0 ; $row < 3 ; $row++){
//     for($col= 0 ; $col < 3 ; $col++){
//         echo $employee[$row][$col]. " ";
//     }
//     echo "<br>";
// }


$data = [  
    ['Rose' , '1354' , '45'] ,
    ['Tomato' , '3268' , '73' ] , 
    ['Cabbage' , '3823' ,' 43'] ,
    ['Onion' , '4353' ,'10']
];

// print_r($data);

// print_r($data[2][0]);
// echo count($data);

$data[] = ['Potato' , '3423' , '12'];
// print_r($data);
// echo count($data);


$poped_elemet = array_pop($data);
// print_r($poped_elemet);


$data_asso = [  
    ['Item'=> 'Rose' , 'Price' => '1354' , 'Quantity'=>'45'] ,
    ['Item'=> 'Tomato' , 'Price' => '3268' ,'Quantity'=> '73' ] , 
    ['Item'=> 'Cabbage' , 'Price' => '3823' ,'Quantity'=>' 43'] ,
    ['Item'=> 'Onion' , 'Price' => '4353' ,'Quantity'=>'10']
];


// print_r($data_asso);
// echo $data_asso[2]['Price'];
// echo count($data_asso);
?>