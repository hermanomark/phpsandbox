<?php 
  
  if(isset($_GET['name'])) {
    print_r($_GET);
    // use htmlentities to prevent an attack it converts the script into harmless html code
    $name = htmlentities($_GET['name']);
    echo $name;
    $email = htmlentities($_GET['email']);
    echo $email;
  }

  /*
  // POST is much more secure to send data, because it was sent to header not in the url
  if(isset($_POST['name'])) {
    print_r($_POST);
    $name = htmlentities($_POST['name']);
    echo $name;
    echo $_GET['email'];
  }

  // REQUEST would work wether you set POST or GET in the form method
  // this isn't use much you wanna stick with POST and GET
  if(isset($_REQUEST['name'])) {
    // print_r($_REQUEST);
    $name = htmlentities($_REQUEST['name']);
    echo $name;
    // echo $_GET['email'];
  }

  // another super global
  echo $_SERVER['QUERY_STRING'];

  */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Website</title>
</head>
<body>
  <form method="GET" action="get_post.php">
    <div>
      <label for="">Name</label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="">Email</label>
      <input type="text" name="email">
    </div>
    <input type="submit" value="Submit">
  </form>
  <ul>
    <li>
      <a href="get_post.php?name=Brad&email=brad@app.com">Brad</a>
    </li>
    <li>
      <a href="get_post.php?name=Steve&email=steve@app.com">Steve</a>
    </li>
  </ul>
  <h1><?php echo "{$name}'s Profile"; ?></h1>
  <h1><?php echo "{$email}'s Email"; ?></h1>
</body>
</html>