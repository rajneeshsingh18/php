<?php
echo <<<_END
<html>
    <head>
        <title>Bullet</title>
    </head>
    <body>
        <h3>Bullet</h3>
        <form method = "post" action = "P16.php">
            <label>Use space to seprate words</label>
            <input type = "text" name = "str" value = "red yellow green orange blue">
            <br>
            <input type = "submit" name = "button" value = "Create">
        </form>
    </body>
</html>
_END;

$str = isset($_POST["str"]) ? $_POST["str"] : 0;

$list = explode(" ", $str);

foreach($list as $bullet)
    echo "⚫ $bullet<br>"
?>