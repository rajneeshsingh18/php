<section>
<?php
	if (!isset($_COOKIE['user'])) {
		if(!isset($_POST['submit'])) {
			die("Login to access this page...");
		}
		
		$username = htmlentities($_POST['username']);
		$password = htmlentities($_POST['password']);
		
		define("DB_HOST", "localhost");
		define("DB_USER", "Rajneesh");
		define("DB_PASS", "rajsql123@"); 
		define("DB_DATABASE", "CollegeWebsite");
		
		$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
		
		!$mysqli->connect_error or die("Error: connection failed");
		
		$login_query = "SELECT * FROM User WHERE username=\"$username\" AND password=\"$password\";";

		$result = $mysqli->query($login_query);

		if (!$result->num_rows) {
			die("<h1>Login Failed</h1>");
		}
	} else {
		$username = $_COOKIE['user'];
	}
	
	$name = ucfirst($username);
	echo "<h1>Hello, $name!";
	
	// setting cookie
	setcookie('user', $username, time() * 10 ^ 5);
?>
</section>