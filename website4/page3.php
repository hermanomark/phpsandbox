<?php
  // don't forget to sart every session
  session_start();
  
  print_r($_SESSION);

  // fixing unset from page 4
  $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not Subscribed';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Sessions</title>
</head>
<body>
  <h1>Hello <?php echo $name; ?></h1>
  <h1><?php echo $email; ?></h1>
</body>
</html>