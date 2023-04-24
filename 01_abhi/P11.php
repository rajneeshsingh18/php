<?php
echo <<<_END
<html>
    <head>
        <title>Find String</title>
    </head>
    <body>
        <h3>Find String</h3>
        <form method = "post" action = "P11.php">
            <label>Main String</label>
            <input type = "text" name = "mainstr" value = "Escaped through backdoor">
            <br><label>Find String</label>
            <input type = "text" name = "substr" value = "backdoor"><br>
            <input type = "submit" name = "button" value = "Find">
        </form>
    </body>
</html>
_END;

$mainstr = isset($_POST["mainstr"]) ? $_POST["mainstr"] : 0;
$substr = isset($_POST["substr"]) ? $_POST["substr"] : 0;

if(strpos($mainstr, $substr))
    echo "String \"$mainstr\" does contain string \"$substr\"";
else 
    echo "String \"$mainstr\" does not contain string \"$substr\"";
?>