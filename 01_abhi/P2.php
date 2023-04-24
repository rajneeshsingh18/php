<?php
echo <<<_END
<html>
        <head>
                <title>Month</title>
        </head>
        <body>
                <h3>Month</h3>
                <form method = "post" action = "P2.php">
                        <input type = "number" name = "month" min = "1" max = "12">
                        <input type = "submit" value = "Month">
                </form>
        </body>
</html>
_END;
//Display the number of days in Month
$month = isset($_POST["month"]) ? $_POST["month"] : 0;

echo "<br>";
switch($month)
{      
    case 0:echo "Enter a Month number";
        break;
    case 1:echo "Month number $month JANUARY has 31 days";
        break;
    case 3:echo "Month number $month MARCH has 31 days";
        break;
    case 5:echo "Month number $month MAY has 31 days";
        break;
    case 7:echo "Month number $month JULY has 31 days";
        break;
    case 8:echo "Month number $month AGUST has 31 days";
        break;
    case 10:echo "Month number $month OCTOBER has 31 days";
        break;
    case 12:echo "Month number $month DECEMBER has 31 days";
        break;
    case 4:echo "Month number $month APRIL has 30 days";
        break;
    case 6:echo "Month number $month JUNE has 30 days";
        break;
    case 9:echo "Month number $month SEPTEMBER has 30 days";
        break;
    case 11:echo "Month number $month NOVEMBER has 30 days";
        break;
    case 2:echo "Month number $month FEBRUARY has 28 or 29 days";
        break; 
}
?>