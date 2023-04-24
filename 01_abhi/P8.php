<?php
echo <<<_END
<html>
    <head>
        <title>Print Inverse</title>
    </head>
    <body>
        <h3>Inverse</h3>
        <form method = "post" action = "P8.php">
            <input type = "text" name = "atext" value = "Potato">
            <input type = "submit" value = "Print">
        </form>
    </body>
</html>
_END;

$atext = isset($_POST["atext"]) ? $_POST["atext"] : 0;

echo strrev($atext);



?>