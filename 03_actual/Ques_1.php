<!-- (Use HTML forms for accepting input from user) -->
<!-- 1) Write a PHP script to input three numbers and print the largest number -->

<html>
<form method="POST">
	Enter First Number:<input  name="num1">
	<br>
	Enter Second Number:<input name="num2">
	<br>
	Enter Third Number:<input  name="num3">
	<br>
	<button type="submit" name="submit">Submit</button>
</form>
</html>
<?php
	if(isset($_POST['submit'])){
		$num1=$_POST['num1'];
		$num2=$_POST['num2'];
		$num3=$_POST['num3'];
		$max=$num1;
		
		if ($num2>$max){
        $max=$num1;
		}
		
		if($num3>$max){
        $max=$num3;
		}
    
		echo " <p> The largest number is " . $max ."</p>";
	}
?> 


