<?php
if(isset($_POST['submit'])) {
  $selected_language = $_POST['language'];
  switch ($selected_language) {
    case 'english':
      echo "Hello!";
      break;
    case 'french':
      echo "Bonjour!";
      break;
    case 'spanish':
      echo "¡Hola!";
      break;
    default:
      echo "Please select a language";
      break;
  }
}
?>

<form method="POST">
  <label for="language">Choose a language:</label>
  <select name="language" id="language">
    <option value="english">English</option>
    <option value="french">French</option>
    <option value="spanish">Spanish</option>
  </select>
  <button type="submit" name="submit">Submit</button>
</form>


