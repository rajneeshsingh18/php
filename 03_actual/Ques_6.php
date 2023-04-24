<html>
<form method="POST">
Enter the value of n:<input  name="num">
<button type="submit" name="submit">SUBMIT</button>
</form>   
</html>
<?php
if(isset($_POST['submit'])){
    $num=$_POST['num'];

    for($row=0;$row<$num;$row++){
        for($col=0;$col <=$row;$col++){
                echo"*"." " ;
        }
 		echo"<br>";
    }
}
?>