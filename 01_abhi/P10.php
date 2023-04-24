<?php
echo <<<_END
<html>
    <head>
        <title>lower case</title>
    </head>
    <body>
        <h3>lower case</h3>
        <form method = "post" action = "P10.php">
            <label>text</label>
            <input type = "text" name = "str" value = "kaboom">
            <input type = "submit" name = "button" value = "Print">
        </form>
    </body>
</html>
_END;

$str = isset($_POST["str"]) ? $_POST["str"] : 0;

if(ctype_lower($str)) 
    echo "String $str only contains lowercase letters";
else 
    echo "String $str doesnot contain only lowercase letters";
?>