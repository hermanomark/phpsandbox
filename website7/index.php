<?php 

  $path = '/dir0/dir1/myfile.php';
  $file = 'file1.txt';
  // Return filename
  // echo basename($path);

  // Return filename without extension
  // echo basename($path, '.php');

  // Return the dir name from path
  // echo dirname($path);

  // Check if file exists
  // echo file_exists($file);

  // Get absolute path
  // echo realpath($file);


  // Check to see if file
  // echo is_file($file);
  // Note: it also returns 1 just like file_exists() the difference is file_exists() also checks for folders

  // Check if writable
  // echo is_writable($file);

  // Check if readable
  // echo is_readable($file);

  // Get the file size
  // echo filesize($file);

  // Create a directory
  // mkdir('testing');

  // Remove directory if empty
  // rmdir('testing');

  // Copy file
  // echo copy('file1.txt', 'file2.txt');

  // Rename a file
  // rename('file2.txt', 'myfile.txt');

  // Delete File
  // unlink('myfile.txt');

  // Write from file to string
  // echo file_get_contents($file);

  // Write string to file
  // echo file_put_contents($file, 'Goodbye World');
  // Note: file_put_contents() will output the size of the file in the browser, and then completely replace the content of the file.

  // You will have to do this to append
  // $current = file_get_contents($file);
  // $current .= ' Goodbye World';
  // file_put_contents($file, $current)

  // Open file for reading
  // $handle = fopen($file, 'r');
  // $data = fread($handle, filesize($file));
  // echo $data;
  // fclose($handle);

  // Open file for writng
  $handle = fopen('file2.txt', 'w');
  $txt = "John Doe\n";
  fwrite($handle, $txt);
  $txt = "Steve Smith\n";
  fwrite($handle, $txt);
  fclose($handle);

?>