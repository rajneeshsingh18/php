<?php

include("db_connect.php");

//MYSQLi --> i stands for improved version
//PDO = php data object


//write query for all momos

// $sql = 'SELECT * FROM momos'; --> all columns
$sql = 'SELECT title , ingredients , id FROM momos ORDER BY created_at';

//make query and get result 

$result = mysqli_query($conn , $sql);

//fetch the resulting rows as an array
$momos = mysqli_fetch_all($result , MYSQLI_ASSOC);

// print_r(explode(' ' , $momos[0]['ingredients']));
// print_r($momos);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);
// print_r($momos);
// ?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<h4 class = "center grey-text" >Momos! </h4>
<div class="container">
<div class = "row">

    <?php foreach($momos as $momo) : ?>
        <div class="col s6 md3">
            <div class="card z-depth-0">
                <div class="card-content center">
                    <h6> <?php echo htmlspecialchars($momo['title']); ?></h6>
        
                        
                    <ul>
                    <?php foreach(explode(' ', $momo['ingredients']) as $ing) : ?>
                        <li> <?php echo htmlspecialchars($ing); ?></li>
                    <?php endforeach; ?>
                    </ul>
                </div>
                <div class="class-action right-align">
                    <a href="fetch_details.php ?id =<?php echo $momo['id']?>" class="brand-text">More info</a>
                </div>
            </div>
        </div>

    <?php endforeach; ?>


</div>
</div>

<?php include('templates/footer.php'); ?>
</html>