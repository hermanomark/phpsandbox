<?php
  # substr()
  # Returns a portion of a string
  
  // $output = substr ('Hello', 1, 3);
  // $output = substr ('Hello', -2);
  // echo $output;

  # strlen()
  # Returns the length of a string

  // $output = strlen('Hello World');
  // echo $output;

  # strpos()
  # Finds the position of the first occurence of a sub string

  // $output = strpos('Hello Worlds', 'o');
  // echo $output;

  # strrpos()
  # Finds the position of the last occurence of a sub string

  // $output = strrpos('Hello Worlds', 'o');
  // echo $output;

  # trim()
  # Strip whitespace

  // $text = 'Hello world              ';
  // var_dump($text);

  // $trimmed = trim($text);
  // var_dump($trimmed);

  # strtoupper
  # Makes everything uppercase

  // $output = strtoupper('Hello World');
  // echo $output;

  # strtolower
  # Makes everything lowercase

  // $output = strtolower('Hello World');
  // echo $output;

  # ucwords()
  # Capitalized every word
  
  // $output = ucwords('hello world');
  // echo $output;
  
  # str_replace()
  # Replace all occurence of a sarch string with a replacement

  // $text = 'Hello World';
  // $output = str_replace('World', 'Everyone', $text);
  // echo $output;

  # is_string()
  # Check if string

  // $val = '22';
  // $output = is_string($val);
  // echo $output;

  // $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');

  // foreach($values as $value) {
  //   if (is_string($value)) {
  //     echo "$value is a string <br/>";
  //   }
  // }

  # gzcompress()
  # Compress a string
  
  // $string = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

  // $compressed = gzcompress($string);
  // echo $compressed;

  // It will return an unreadable characters in screen, you may not want to do that.

  // $original = gzuncompress($compressed);
  // echo $original;
?>