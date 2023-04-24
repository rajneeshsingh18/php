<?php

if(isset($_POST['submit'])){

    //checking mail
    if(empty($_POST['email'])){
        echo 'An email is required <br/>';
    }else{
        echo $_POST['email'];
    }

    //checking title
    if(empty($_POST['title'])){
        echo 'A title is required <br/>';
    }else{
        echo $_POST['title'];
    }

    //cheching ingredients
    if(empty($_POST['ingredients'])){
        echo 'At least one  ingredient is required <br/>';
    }else{
        echo $_POST['ingredients'];
    }

}

//FILTER AND MORE VALIDATIONS
if(isset($_POST['submit'])){
    //checking mail
        if(empty($_POST['email'])){
            echo 'An email is required <br/>';
        }else{
            $email = $_POST['email'];
            if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
                echo "Enter a valid email address.";
            }
        }
    
    //checking title
        if(empty($_POST['title'])){
            echo 'A title is required <br/>';
        }else{
            $title =  $_POST['title'];
           if(!preg_match('/^[a-zA-Z\s]+$/',$title)){ //regular expression -->regex
            echo "Title must be letter and spaces only";
            echo "<br>";
           }
        }
    
    //cheching ingredients
        if(empty($_POST['ingredients'])){
            echo 'At least one  ingredient is required <br/>';
        }else{
            $ingredients = $_POST['ingredients'];
            if(!preg_match('/^[a-zA-Z0-9\s]+$/', $ingredients)){
                echo  "Ingredients must be letter , numbers and spaces only";
            }
        }
}
?>