

<!DOCTYPE html>
<html>
<head>
	<title>Hello in different languages</title>
</head>
<body>
	<form method="post">
		<select name="language">
			<option value="english">English</option>
			<option value="spanish">Spanish</option>
			<option value="french">French</option>
		</select>
		<input type="submit" name="submit" value="Say Hello">
	</form>

	<?php
		if(isset($_POST['submit'])) {
			$language = $_POST['language'];

			switch ($language) {
				case 'english':
					echo "Hello!";
					break;
				case 'spanish':
					echo "Hola!";
					break;
				case 'french':
					echo "Bonjour!";
					break;
				default:
					echo "Select a language from the drop-down list.";
					break;
			}
		}
	?>
</body>
</html>