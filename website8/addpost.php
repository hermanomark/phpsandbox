<?php
  require('config/config.php');
  require('config/db.php');

  // Message Vars
  $msg = '';
  $msgClass = '';

  // Check for Submit
  if (isset($_POST['submit'])) {

    // Get form data
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $body = mysqli_real_escape_string($conn, $_POST['body']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);

    // Check Required Fields
    if (!empty($title) && !empty($body) && !empty($author)) {

      $query = "INSERT INTO posts(title, author, body) VALUES('$title', '$author', '$body')";

      if (mysqli_query($conn, $query)) {
        header('Location: '.ROOT_URL.'');
        
      }
      else {
        echo 'ERROR: '.mysqli_error($conn);
      }

    }
    else {
      // Failed
      $msg = 'Please fill in all fields';
      $msgClass = 'alert-danger';
    }
  }
?>

  <?php include('inc/header.php'); ?>
    <div class="container">
      <h1>Add Post</h1>
      <?php if ($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg ?></div>
      <?php endif; ?>
      <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
          <label>Title</label>
          <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
          <label>Author</label>
          <input type="text" name="author" class="form-control">
        </div>
        <div class="form-group">
          <label>Body</label>
          <textarea name="body" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary">
      </form>
    </div>
  <?php include('inc/footer.php'); ?>