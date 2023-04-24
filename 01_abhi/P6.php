<?php
echo <<<_END
<html>
    <head>
        <title>Pattern</title>
    </head>
    <body>
        <h3>Pattern</h3>
        Enter number of rows
        <form method = "post" action = "P6.php">
            <input type = "number" name = "num" min = "0" max = "19">
            <input type = "submit" value = "Print">
        </form>
    </body>
</html>
_END;

$num = isset($_POST["num"]) ? $_POST["num"] : 0;

for($i = 1; $i <= $num; $i++)
{
    for($j = 1; $j <= $i; $j++)
        echo "*" . " ";
    echo "<br>";
}
?>