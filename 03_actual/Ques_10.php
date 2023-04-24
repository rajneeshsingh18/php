<?php
if(isset($_POST['submit'])){
  $input = $_POST['input'];
  if(ctype_lower($input)){
    echo "The input string consists of lowercase characters only.";
  } else {
    echo "The input string contains non-lowercase characters.";
  }
}
?>
<form method="post">
  <label for="input">Enter a string:</label>
  <input type="text" name="input" required>
  <button type="submit" name="submit">Check</button>
</form>