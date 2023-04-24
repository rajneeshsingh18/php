<?php
echo <<<_END
<html>
<head>
    <title>Prime</title>
</head>
<body>
    <h3>Prime</h3>
    Enter a number
    <form method = "post" action = "P5.php">
        <input type = "number" name = "num" min = "0" max = "999999" value = 0>
        <input type = "submit" value = "calculate">
    </form>
</body>
</html>
_END;

$num = isset($_POST["num"]) ? $_POST["num"] : 4;
$sqrt = sqrt($num);
$flag = true;   // tell if number if prime or not prime

if ($num == 0 or $num == 1)
    $flag = false;

for($i = 2; $i <= $sqrt; $i++)
    if($num % $i == 0)
        {
            $flag = false;
            break;
        }

if ($flag == true)
        echo "$num is a prime number";
else  
        echo "$num is a not a prime number";    
?>