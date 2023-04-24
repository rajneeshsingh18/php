<?php
echo <<<_END
<html>
    <head>
        <title>Hello</title>
    </head>
    <body>
        <h3>Language</h3>
        <form method = "post" action = "P3.php">
            <select name = "lan" size = "1">
                <label><option value = "हिन्दी">हिन्दी</label>
                <label><option value = "English">English</label>
                <label><option value = "French">French</label>
                <label><option value = "తెలుగు">తెలుగు</label>
                <label><option value = "বাঙ্গালি">বাঙ্গালি</label>
            </select>
            <input type = "Submit">
        </form>
    </body>
</html>
_END;

$lan = isset($_POST["lan"]) ? $_POST["lan"] : 0 ;

if ($lan == "हिन्दी")
    echo "नमस्कार";
else if ($lan == "English")
    echo "Hello";
else if ($lan == "French")
    echo "bonjour";
else if ($lan == "తెలుగు")
    echo "హలో";
else if ($lan = "বাঙ্গালি")
    echo "নমস্কার";
else
    echo "Select a lnaguage";

?>