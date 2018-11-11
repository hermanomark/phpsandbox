<?php
  require('config/config.php');
  require('config/db.php');

  // Check for Delete
  if (isset($_POST['delete'])) {
    $delete_id =  mysqli_real_escape_string($conn, $_POST['delete_id']);

    $query = "DELETE FROM posts WHERE id = {$delete_id}";

    if (mysqli_query($conn, $query)) {
      header('Location: '.ROOT_URL.'');
    }
    else {
      echo 'ERROR: '.mysqli_error($conn);
    }
  }

  // get ID
  // mysqli_real_escape_string, escape dangerous characters
  $id = mysqli_real_escape_string($conn, $_GET['id']);
  // Create Query
  $query = 'SELECT * FROM posts WHERE id = '.$id;

  // Get Result
  $result = mysqli_query($conn, $query);

  // Fetch Data
  //  mysqli_fetch_assoc take that one post and turn it to associative array
  $post = mysqli_fetch_assoc($result);
  // var_dump($posts);

  // Free Result
  mysqli_free_result($result);

  // Close Connection
  mysqli_close($conn);
?>

  <?php include('inc/header.php'); ?>
    <div class="container">
      <a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
      <h1><?php echo $post['title']; ?></h1>
        <small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
        <p><?php echo $post['body']; ?></p>
        <hr>
        <form class="float-right" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
          <input type="submit" name="delete" value="Delete" class="btn btn-danger">
        </form>
        <a class="btn btn-defualt" href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>">Edit</a>
    </div>
  <?php include('inc/footer.php'); ?>