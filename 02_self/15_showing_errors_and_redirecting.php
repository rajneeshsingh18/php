<?php
//showing errors in a variable

$email = $title = $ingredients = " ";
$errors = array('email'=> '' , 'title'=> '' , 'ingredients'=> '');
if(isset($_POST['submit'])){
    //checking mail
        if(empty($_POST['email'])){
            $errors['email'] ='An email is required <br/>';
        }else{
            $email = $_POST['email'];
            if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
                $errors['email'] = "Enter a valid email address.";
            }
        }
    
    //checking title
        if(empty($_POST['title'])){
            $errors['title'] ='A title is required <br/>';
        }else{
            $title =  $_POST['title'];
           if(!preg_match('/^[a-zA-Z\s]+$/',$title)){ //regular expression -->regex
            $errors['title'] = "Title must be letter and spaces only";
            echo "<br>";
           }
        }
    
    //cheching ingredients
        if(empty($_POST['ingredients'])){
            $errors['ingredients'] = 'At least one  ingredient is required <br/>';
        }else{
            $ingredients = $_POST['ingredients'];
            if(!preg_match('/^[a-zA-Z0-9\s]+$/', $ingredients)){
                $errors['ingredients'] = "Ingredients must be letter , numbers and spaces only";
            }
        }
}

//checking errors and redirecting
if(array_filter($errors)){
    // echo "Errors in a file";
}else{
    // echo "Form is valid";
    header('Location: index.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php'); ?>

<section class="container grey-text">
    <h4 class="center grey-text">Add Momos</h4>
    <form action="form.php" method="POST" class="white">
        <label for="">Your Email : </label>
        <input type="text" name="email" value= "<?php echo htmlspecialchars($email)?>">
        <div class="red-text"><?php echo $errors['email']; ?></div>
        <label for="">Momos Title : </label>
        <input type="text" name="title" value= "<?php echo htmlspecialchars($title)?>">
        <div class="red-text"><?php echo $errors['title']; ?></div>
        <label for="">Ingredients (comma separated): </label>
        <input type="text" name="ingredients" value= "<?php echo htmlspecialchars($ingredients)?>">
        <div class="red-text"><?php echo $errors['ingredients']; ?></div>
        <div class="center">
            <input type="submit" value="sumbit" name="submit" class="btn brand z-depth-0">
        </div>
    </form>
</section>
<?php include('templates/footer.php'); ?>

</body>
</html>