<?php
echo <<<_END
<html>
    <head>
        <title>Strip String</title>
    </head>
    <body>
        <h3>Strip String</h3>
        <form method = "post" action = "P12.php">
            <label>String</label>
            <input type = "text" name = "str" value = "Escaped through backdoor">
            <br>
            <input type = "submit" name = "button" value = "Strip">
        </form>
    </body>
</html>
_END;

$str = isset($_POST["str"]) ? $_POST["str"] : 0;

echo str_replace(" ", "", $str);
?>