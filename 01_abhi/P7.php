<?php
echo <<<_END
<html>
    <head>
        <title>combination</title>
    </head>
    <body>
        <h3>Combination</h3>
        <form method = "post" action = "P7.php">
            <label>n</label>
            <input type = "number" name = "n" min = "0" max = "99" value = 0>
            <label>r</label>
            <input type = "number" name = "r" min = "0" max = "99" value = 0>
            <input type = "submit" value = "Print">
        </form>
    </body>
</html>
_END;

$n = isset($_POST["n"]) ? $_POST["n"] : 0;
$r = isset($_POST["r"]) ? $_POST["r"] : 0;

function factorial($number)
{
    if ($number == 0) return 1;
    $fact = 1;
    for($i = 1; $i <= $number; $i++)
    {
        $fact *= $i;
    }
    return $fact;
}


if($n>=$r)
{
    $combination = factorial($n)/(factorial($r)*factorial($n-$r));
    echo "C($n,$r) is $combination";
}
else{
    echo "n cannot be less than r";
}


?>