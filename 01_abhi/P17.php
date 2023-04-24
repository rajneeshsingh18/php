<?php
echo <<<_END
<html>
    <head>
        <title>A Name</title>
    </head>
    <body>
        <h3>A Name</h3>
        <form method = "post" action = "P17.php">
            <label>Use space to seprate words</label>
            <input type = "text" name = "str" value = "Agadmator Nepo Vishi Aronian Magnus">
            <br>
            <input type = "submit" name = "button" value = "Filter">
        </form>
    </body>
</html>
_END;

$str = isset($_POST["str"]) ? $_POST["str"] : 0;

$list = explode(" ", $str);

$i = 0;
foreach($list as $name)
{
    if ($i == 5) break;
    $i++;
    if(substr($name, 0 , 1) == 'A')
    echo "$name<br>";
}
    
?>