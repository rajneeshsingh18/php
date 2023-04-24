<?php
echo <<<_END
<html>
    <head>
        <title>Sort</title>
    </head>
    <body>
        <h3>Sort</h3>
        <form method = "post" action = "P15.php">
            <label>Use space to seprate numbers</label>
            <input type = "text" name = "str" value = "15 13 2 4">
            <br>
            <input type = "submit" name = "button" value = "Sort">
        </form>
    </body>
</html>
_END;

$str = isset($_POST["str"]) ? $_POST["str"] : 0;

$list = explode(" ", $str);

sort($list);

print_r($list);
?>