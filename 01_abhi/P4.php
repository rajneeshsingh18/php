<?php
echo <<<_END
<html>
    <head>
        <title>Sum</title>
    </head>
    <body>
        <h3>Sum</h3>
        Enter a number
        <form method = "post" action = "P4.php">
            <input type = "number" name = "num" min = "0" max = "999999">
            <input type = "submit" value = "calculate">
        </form>
    </body>
</html>
_END;

$num = isset($_POST["num"]) ? $_POST["num"] : 0;

$sum = 0;
for($i = 1; $i <= $num; $i++)
    $sum += $i;

echo "Sum of odd number till $num is $sum";
?>