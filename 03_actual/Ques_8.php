
<html>
<head>
	<title>Reverse String</title>
</head>
<body>
	<form method="post">
		<label for="string">Enter a string:</label>
		<input type="text" name="string" >
		<button type="submit">Get Reverse</button>
	</form>
	<?php
		if(isset($_POST['string'])) {
			$string = $_POST['string'];
			$reverse = strrev($string);
			echo "<p>Reverse of $string is $reverse</p>";
		}
	?>
</body>
</html>