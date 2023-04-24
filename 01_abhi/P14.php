<?php
echo <<<_END
<html>
    <head>
        <title>Palindrome</title>
    </head>
    <body>
        <h3>Palindrome</h3>
        <form method = "post" action = "P14.php">
            <label>String</label>
            <input type = "text" name = "str" value = "MADAM">
            <br>
            <input type = "submit" name = "button" value = "Verify">
        </form>
    </body>
</html>
_END;

$str = isset($_POST["str"]) ? $_POST["str"] : 0;
$revstr = strrev($str);

if($str == $revstr) 
    echo "The string \"$str\" is a Palindrome";
else 
    echo "The string \"$str\" is not a Palindrome";
?>