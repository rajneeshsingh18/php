
<html>
<body>
<form method="post" ">
  Enter a number: <input type="number" name="num">
  <input type="submit" name="submit" value="Check">
</form>
<?php
if (isset($_POST['submit'])) {
  $num = $_POST["num"];
  $flag = 0;
  for ($i = 2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) {
      $flag = 1;
      break;
    }
  }
  if ($num == 1) {
    echo "1 is neither prime nor composite.";
  } elseif ($num == 2) {
    echo "2 is a prime number.";
  } elseif ($flag == 0) {
    echo $num . " is a prime number.";
  } else {
    echo $num . " is not a prime number.";
  }
}
?>
</body>
</html>