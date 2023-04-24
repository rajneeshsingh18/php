<?php

$marks = array(
    "Maths" => 85,
    "Science" => 92,
    "English" => 78,
    "History" => 88,
    "Geography" => 90
);

foreach($marks as $key => $value){
    echo "Subject: ".$key." - Marks: ".$value."\n";
}

ksort($marks);

echo "<br>After Sorting<br>";
foreach($marks as $key => $value)
    echo "$key = $value<br>";
?>