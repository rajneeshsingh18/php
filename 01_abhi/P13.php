<?php
echo <<<_END
<html>
    <head>
        <title>Replace 1st</title>
    </head>
    <body>
        <h3>Replace 1st</h3>
        <form method = "post" action = "P13.php">
            <label>String</label>
            <input type = "textarea" name = "str" value = "The Panda escaped through backdoor">
            <br>
            <input type = "submit" name = "button" value = "Replace">
        </form>
    </body>
</html>
_END;

$str = isset($_POST["str"]) ? $_POST["str"] : 0;

echo preg_replace('/'.'The'.'/', 'That', $str, 1);
?>