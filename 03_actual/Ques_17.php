<?php

$names = array("Aman", "Bob", "Rajneesh", "Anna", "Ayush");
foreach ($names as $name) {
    if (substr($name, 0, 1) == "A") {
        echo $name . "<br>";
    }
}

?>