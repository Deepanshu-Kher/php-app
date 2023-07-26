<!DOCTYPE html>
<html>
<body>

<h2>Contact Form</h2>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="name">
  <br>
  E-mail: <input type="text" name="email">
  <br>
  Message: <textarea name="message" rows="5" cols="40"></textarea>
  <br>
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required!";
    } else {
        echo "<h2>Your Input:</h2>";
        echo "Name: " . $name;
        echo "<br>";
        echo "Email: " . $email;
        echo "<br>";
        echo "Message: " . $message;
    }
}
?>

</body>
</html>
