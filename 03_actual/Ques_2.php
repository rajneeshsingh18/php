<!-- Write a PHP code which accepts a number(from 1-12) as month value, and displays the number of days in that month. (use Switch case). -->
<html>

<form method="post" action="Ques_2.php">
	
	<h3> Month </h3>
	Enter a month ( from 1 -12 ) : <input name="month" type = "number" min="1" max= "12">
	<button name= "submit" value= "submit">SUBMIT </button> 

    
</form>

</html>

<?php

if(isset($_POST['month'])){
	$month = $_POST['month'];
	
	if($month == " "){
		echo "Please Enter a number";
	}else{
	
		switch($month){
			case 1: 
				echo "January has 31 days.";
				break;
			case 2: 
				echo "Feb has 28 or 29 days.";
				break;
			case 3: 
				echo "March has 31 days.";
				break;
			case 4: 
				echo "April has 30 days.";
				break;
			case 5: 
				echo "May has 31 days.";
				break;
			case 6: 
				echo "June has 30 days.";
				break;
			case 7: 
				echo "July has 31 days.";
				break;
			case 8: 
				echo "August has 31 days.";
				break;
			case 9: 
				echo "September has 30 days.";
				break;
			case 10: 
				echo "October has 31 days.";
				break;
			case 11: 
				echo "November has 30 days.";
				break;
			case 12: 
				echo "December has 31 days.";
				break;
			default:
				echo "Enter a valid number!";
				break;


		}

	}
}
?>