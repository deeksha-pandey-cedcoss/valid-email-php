<h1>The input element</h1>
<form action="/" action="post">
    <label for="fname">Email</label>
    <input type="text" id="fname" name="fname"><br><br>
    <br>
    <input type="submit" value="Submit">
</form>
<?php

$email = $_GET['fname'];

// Validate email
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo"<b>$email</b> is a valid email address";
} else {
  echo"<b>$email</b> is not a valid email address";
}
?>

