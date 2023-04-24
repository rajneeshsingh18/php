<?php
echo <<<_END
<html>
    <head>
        <title>Subject</title>
    </head>
    <body>
        <h3>Subject</h3>
        <form method = "post" action = "P18.php">
            <label>Subject Name</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<label>Marks</label><br>

            <input type = "text" name = "sub1" value = "Hindi">
            <input type = "number" name = "mark1" min = "0" max = "100" value = "75"><br>

            <input type = "text" name = "sub2" value = "English">
            <input type = "number" name = "mark2" min = "0" max = "100" value = "75"><br>

            <input type = "text" name = "sub3" value = "Maths">
            <input type = "number" name = "mark3" min = "0" max = "100" value = "75"><br>

            <input type = "text" name = "sub4" value = "Science">
            <input type = "number" name = "mark4" min = "0" max = "100" value = "75"><br>

            <input type = "text" name = "sub5" value = "SST">
            <input type = "number" name = "mark5" min = "0" max = "100" value = "75"><br>

            <input type = "submit" name = "button" value = "Submit">
        </form>
    </body>
</html>
_END;

$sub1 = isset($_POST["sub1"]) ? $_POST["sub1"] : 0;
$sub2 = isset($_POST["sub2"]) ? $_POST["sub2"] : 0;
$sub3 = isset($_POST["sub3"]) ? $_POST["sub3"] : 0;
$sub4 = isset($_POST["sub4"]) ? $_POST["sub4"] : 0;
$sub5 = isset($_POST["sub5"]) ? $_POST["sub5"] : 0;


$mark1 = isset($_POST["mark1"]) ? $_POST["mark1"] : 0;
$mark2 = isset($_POST["mark2"]) ? $_POST["mark2"] : 0;
$mark3 = isset($_POST["mark3"]) ? $_POST["mark3"] : 0;
$mark4 = isset($_POST["mark4"]) ? $_POST["mark4"] : 0;
$mark5 = isset($_POST["mark5"]) ? $_POST["mark5"] : 0;

$Tray[$sub1] = $mark1;
$Tray[$sub2] = $mark2;
$Tray[$sub3] = $mark3;
$Tray[$sub4] = $mark4;
$Tray[$sub5] = $mark5;

foreach($Tray as $item => $value)
    echo "$item = $value<br>";

ksort($Tray);

echo "<br>After Sorting<br>";
foreach($Tray as $item => $value)
    echo "$item = $value<br>";
    
?>