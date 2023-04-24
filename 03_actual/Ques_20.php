<!-- <form method="post" action="Ques_20.php">
  <label for="name">Name:</label>
  <input type="text" name="name" required>
  <label for="age">Age:</label>
  <input type="number" name="age"  required>
  <label for="address">Address:</label>
  <input type="text" name="address" required>
  <label for="email">Email:</label>
  <input type="email" name="email"  required>
  <input type="submit" value="Submit">
</form>


<?php

if(isset($_POST['submit'])){
$name = $_POST['name'];
$age = $_POST['age'];
$address = $_POST['address'];
$email = $_POST['email'];
$ch=0;

if (empty($name) || empty($age) || empty($address)) {
  echo "Please fill out all required fields.";
  $ch=1;
  exit;
}

if ($age <= 18) {
  echo "Age must be greater than 18.";
  $ch=1;
  exit;
}

if (stripos($address, "Delhi") === false) {
  echo "Address must contain 'Delhi'.";
  $ch=1;
  exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Please enter a valid email address.";
  $ch=1;
  exit;
}


  echo "Name: $name<br>";
  echo "Age: $age<br>";
  echo "Address: $address<br>";
  echo "Email: $email<br>";
  

}

// if($ch==0){
// echo "Name: $name<br>";
// echo "Age: $age<br>";
// echo "Address: $address<br>";
// echo "Email: $email<br>";
// }
?> -->

<html>
    <head>
        <title>Info</title>
    </head>
    <body>
        <h3>Info</h3>
        <form method = "post" action = "Ques_20.php">
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

<?php


if(isset($_POST['submit'])){

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

}

?>