
<html>
<head>

  <title>sum of odd number</title>
</head>
<body>
<form method="POST">
    <label for="num">Enter a number :</label> <input type="number" name="num">
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>


<?php

if(isset($_POST['submit'])){
          $n = $_POST['num'];
          $sum = 0;
          for ($i = 1; $i <= $n; $i++) {
            $odd_number = 2*$i - 1;
            $sum += $odd_number; 
          }
          echo "The sum of the first $n odd numbers is $sum";
}
?>