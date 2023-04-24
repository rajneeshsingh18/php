<?php
echo <<<_END
<html>
    <head>
        <title>##</title>
    </head>
    <body>
        <h3>##</h3>
        <form method = "post" action = "P19.php">
            <label>Use ## to seprate words</label><br>
            <input type = "text" name = "str" value = "hello##this##is##php##programming">
            <br>
            <input type = "submit" name = "button" value = "Explode">
        </form>
    </body>
</html>
_END;

$str = isset($_POST["str"]) ? $_POST["str"] : 0;

$list = explode("##", $str);

$i = 0;
foreach($list as $bullet)
{
    echo "Array[$i]$bullet<br>";
    $i++;
}
    
?>