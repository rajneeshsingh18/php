<?php
// database config
define("DB_HOST", "localhost");
define("DB_USER", "Rajneesh");
define("DB_PASS", "rajsql123@"); 

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS);

!$mysqli->connect_error or die("Error: connection failed");

$create_database = "CREATE DATABASE IF NOT EXISTS College_Website;";

$mysqli->query($create_database) or die("Error: creating database failed");

$mysqli->query("USE College_Website");

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
            echo "<h1>Error: User cannot be created</h1>";
        } else {
            $success_msg = <<< _END
            <h1 >User created successfully</h1>
    _END;
            echo $success_msg;
        }
    }

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

mysqli_close($mysqli);
    




?>