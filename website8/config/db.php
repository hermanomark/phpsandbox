<?php 
  // Create Connection
  // $conn = mysqli_connect('localhost', 'root', '123456', 'phpblog');
  // you can define above code from config.php
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  // Check Connection
  if (mysqli_connect_errno()) {
    // Connection Failed
    echo 'Failed to connect to MySQL'. mysqli_connect_errno();
  }

?>