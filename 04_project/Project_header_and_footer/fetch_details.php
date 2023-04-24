<?php

//check get request id para

include("db_connect.php");
if(isset($_GET['id'])){

    $id = mysqli_real_escape_string($conn , $_GET['id']);

    //make sql
    $sql = "SELECT * FROM momos WHERE id = $id";

    $result = mysqli_query($conn , $sql);

    //fetch result in array format
    $momos = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);

    print_r($momos);

}

?>

<html>

<?php include('templates/header.php'); ?>

  <h2>DETAILS</h2>
<?php include('templates/footer.php'); ?>

</html>