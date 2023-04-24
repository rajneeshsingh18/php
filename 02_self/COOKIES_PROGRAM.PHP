<link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
<section>
	<h1>Sign Up</h1>
	<form method="post" action="signup.php">
		<label for="username">Username</label>
		<input id="username" name="username" type="text">

		<label for="passsword">Password</label>
		<input id="password" name="password" type="password"><br>
		
		<button type="submit" name="submit">Sign Up</button>
	</form>
	<a href="./login_collegewebsite.php">login instead</a>
</section>

<link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">
<section>
<?php
	// database config
	define("DB_HOST", "localhost");
	define("DB_USER", "Rajneesh");
	define("DB_PASS", "rajsql123@"); 
	
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS);
	
	!$mysqli->connect_error or die("Error: connection failed");
	
	$create_database = "CREATE DATABASE IF NOT EXISTS CollegeWebsite;";
	
	$mysqli->query($create_database) or die("Error: creating database failed");
	
	$mysqli->query("USE CollegeWebsite");
	
	// creating a table
	$create_table = "
	CREATE TABLE IF NOT EXISTS User
		(username varchar(120) NOT NULL UNIQUE,
		password varchar(120) NOT NULL);";
		
	$mysqli->query($create_table) or die("Error: Creating table failed");
	
	// inserting data
	if (isset($_POST['submit'])) {
		$username = htmlentities($_POST['username']);
		$password = htmlentities($_POST['password']);
		
		if($username == '' or $password == '') {
			echo "<h1>Error: Username/password cannot be empty";
		} else {
			$insert_command = <<< _END
			INSERT INTO User VALUES ("{$username}", "{$password}");
_END;
		
			if (!$mysqli->query($insert_command)) {
				echo "<h1 style=\"color: red;\">Error: User cannot be created</h1>";
			} else {
				$success_msg = <<< _END
				<h1 style="color: green;">User created successfully</h1>
_END;
				echo $success_msg;
			}
		}
		
		
	}
?>
<br>
<a href="./collegeWebsite.php">signup</a><br><a href="./login_collegewebsite.php">login</a>
</section>
<link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">

<section>
<?php
	// already login
	if(isset($_COOKIE['user'])) {
		echo "<h1>Already logged in {$_COOKIE['user']}!</h1>";
		echo "<a href=\"./login_success.php\">home page</a>";
		die();
	}
?>

<h1>Log In</h1>
<form method="post" action="./login_success.php">
	<label for="username">Username</label>
	<input id="username" name="username" type="text">

	<label for="passsword">Password</label>
	<input id="password" name="password" type="password"><br>
	
	<button type="submit" name="submit">Login</button>
</form>
<a href="./collegeWebsite.php">signup instead</a>
</section>

<link rel="stylesheet" href="https://cdn.simplecss.org/simple.min.css">

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