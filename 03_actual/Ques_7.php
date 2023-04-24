<html>
    <head>
        <title>combination</title>
    </head>
    <body>
        <h3>Combination</h3>
        <form method = "post" action = "Ques_7.php">
            <label>n</label>
            <input type = "number" name = "n" min = "0" max = "99" value = 0>
            <label>r</label>
            <input type = "number" name = "r" min = "0" max = "99" value = 0>
            <button type = "submit" value = "submit" name="submit"> Print </button>
        </form>
    </body>
</html>

<?php

if(isset($_POST["submit"])) {
$n = isset($_POST["n"]); 
$r = isset($_POST["r"]) ;

function factorial($number)
{
    if ($number == 0) return 1;
    $fact = 1;
    for($i = 1; $i <= $number; $i++)
    {
        $fact *= $i;
    }
    return $fact;
}


if($n>=$r)
{
    $combination = factorial($n)/(factorial($r)*factorial($n-$r));
    echo "C($n,$r) is $combination";
}
else{
    echo "n cannot be less than r";
}

}

?>