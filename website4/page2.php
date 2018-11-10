<?php 
  session_start();

  // you can changed the variable of a session
  $_SESSION['name'] = 'Jon Doe';

  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Sessions</title>
</head>
<body>
  <h5>Thank you <?php echo $name; ?>, You have subscribed with the email <?php echo $email ?></h5>
  <a href="page3.php">Go to page 3</a>
</body>
</html>