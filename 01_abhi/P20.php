<?php
echo <<<_END
<html>
    <head>
        <title>Info</title>
    </head>
    <body>
        <h3>Info</h3>
        <form method = "post" action = "P20.php">
        Name<br>
        <input type = "text" name = "name" value = "Ram" required><br>
        Age<br>
        <input type = "number" name = "age" min = "18" value = "25"><br>
        Address<br>
        <input type = "textarea" name = "add" value = "Rajnagar, Palam, Delhi" required><br>
        Email<br>
        <input type = "text" name = "email" value = "ram@google.com"><br>
        <input type = "submit" value = "Submit">
        </form>
    </body>
</html>
_END;

$name = isset($_POST["name"]) ? $_POST["name"] : 0;
$age = isset($_POST["age"]) ? $_POST["age"] : 0;
$add = isset($_POST["add"]) ? $_POST["add"] : 0;
$email = isset($_POST["email"]) ? $_POST["email"] : 0;

$name = htmlspecialchars($name, ENT_QUOTES);
$age = htmlspecialchars($age, ENT_QUOTES);
$add = htmlspecialchars($add, ENT_QUOTES);
$email = htmlspecialchars($email, ENT_QUOTES);

$addflag = preg_match("/Delhi/i", $add, );
if ($addflag != 1)
    echo "Address must contain Delhi<br>";

$at_email = preg_match("/@/", $email);
if($at_email != 1)
    echo "Email is invalid<br>";

echo "name = $name<br>";
echo "age = $age<br>";
echo "add = $add<br>";
echo "email = $email<br>";
?>