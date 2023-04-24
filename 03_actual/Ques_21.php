<?php
//Html page in ques_21_login.php
if(isset($_POST['Submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
$conn = mysqli_connect("localhost", "Rajneesh", "rajsql123@", "CollegeWebsite2");

if(!$conn)
    die("Connection failed " . mysqli_connect_error());

$sql = "CREATE DATABASE IF NOT EXISTS CollegeWebsite2";
if(mysqli_query($conn, $sql))
    echo "Database Created successfully<br>";
else
    echo "Error Creating Databse " .mysqli_error($conn);

$sql = "CREATE TABLE IF NOT EXISTS users (
        username VARCHAR(120) NOT NULL,
        pass VARCHAR(10) NOT NULL
        )";
if (mysqli_query($conn, $sql))
    echo "Table created successfully<br>";
else
    echo "Error creating Table" . mysqli_error($conn);

$tray[0] = "jeet";
$tray[1] = "shek";
foreach($tray as $value)
{
     $sql = "INSERT INTO users (username, pass) VALUES ('$value', '$value')";
 
    if (mysqli_query($conn, $sql)) 
      echo "New record created successfully<br>";
    else 
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "SELECT * FROM users WHERE username = '$username' AND pass = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) 
    echo "Welcome, $username!";
else
    echo "Error: Invalid username or password or unregistered user.";


mysqli_close($conn);
}
?>