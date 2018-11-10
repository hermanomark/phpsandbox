<?php 
  // sessions are stored in the server
  // cookies are stored in the browser

  // sessions is preferred over cookies
  // but we should know cookies too!
  
  if (isset($_POST['submit'])) {
    $username = htmlentities($_POST['username']);

    setcookie('username', $username, time()+3600);
    // 1 hour

    header('Location: page2.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Cookies</title>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="username" placeholder="Enter Username">
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>

<!-- you can see the cookies via f12 > application > Cookies -->
<!-- you can also view cookies in chrome in settings > Privacy > Content Settings > All Cookies and Site data, Search for localhost, find username -->