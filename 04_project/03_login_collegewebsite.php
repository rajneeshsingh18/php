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