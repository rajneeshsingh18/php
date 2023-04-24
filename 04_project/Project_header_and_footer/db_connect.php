<?php
//--> connect to database

$conn = mysqli_connect('localhost' , 'Rajneesh' ,'rajsql123@' , 'graduate_momos');


//checking connection

if(!$conn){
    echo "Connection error " . mysqli_connect_error();
}
?>