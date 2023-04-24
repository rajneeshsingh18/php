<?php
echo <<<_END
<html>
    <head>
        <title>compare</title>
    </head>
    <body>
        <h3>compare</h3>
        <form method = "post" action = "P9.php">
            <label>number</label>
            <input type = "number" name = "var1" min = "0" max = "99" value = 0>
            <label>text</label>
            <input type = "text" name = "var2" value = "0">
            <input type = "submit" name = "button" value = "Print">
        </form>
    </body>
</html>
_END;

$var1 = isset($_POST["var1"]) ? $_POST["var1"] : 0;
$var2 = isset($_POST["var2"]) ? $_POST["var2"] : 0;

$var1 = (int)$var1;
$var2 = (string)$var2;

echo "comapring text and number with the help of<br>";
echo "equality operator ie $var1==$var2    ";
echo $var1 == $var2;
echo "<br>";
echo "identity operator ie $var1===$var2   ";
echo $var1 === $var2;



?>