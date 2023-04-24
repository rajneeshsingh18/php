<?php
//Html form for taking 3 variables as a input 
echo <<<_END
<html>
    <head>
        <title>Biggest Number</title>
    </head>
    <body>
        <h3>Biggest Number calculator</h3>
        <form method = "post" action = "P1.php">
            <input type = "number" name = "x"  value = "0">&nbsp&nbsp&nbsp
            <input type = "number" name = "y"  value = "0">&nbsp&nbsp&nbsp
            <input type = "number" name = "z"  value = "0">&nbsp&nbsp&nbsp
            <input type = "submit" value = "calculate">
        </form>
    </body>
</html>
_END;

//translating input into php varibales
$x = isset($_POST["x"]) ? $_POST["x"] : "0";
$y = isset($_POST["y"]) ? $_POST["y"] : "0";
$z = isset($_POST["z"]) ? $_POST["z"] : "0";

if($x > $y)
{
    if($x > $z)
    {
        echo "$x is largest number";
    }
    else
    {
        echo "$z is largest number";
    }
}
else
{
    if($y > $z)
    {
        echo "$y is largest number";
    }
    else
    {
        echo "$z is largest number";
    }
}
?>