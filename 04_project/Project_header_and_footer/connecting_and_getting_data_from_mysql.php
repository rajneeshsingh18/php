<?php


//MYSQLi --> i stands for improved version
//PDO = php data object

//--> connect to database

$conn = mysqli_connect('localhost' , 'Rajneesh' ,'rajsql123@' , 'graduate_momos');


//checking connection

if(!$conn){
    echo "Connection error " . mysqli_connect_error();
}

//write query for all momos

// $sql = 'SELECT * FROM momos'; --> all columns
$sql = 'SELECT title , ingredients , id FROM momos';

//make query and get result 

$result = mysqli_query($conn , $sql);

//fetch the resulting rows as an array
$momos = mysqli_fetch_all($result , MYSQLI_ASSOC);

print_r($momos);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

//close the connection
print_r($momos);
?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>
<?php include('templates/footer.php'); ?>
</body>
</html>