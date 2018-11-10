<?php 
  // echo date('d'); // Day
  // echo date('m'); // Month
  // echo date('Y') // Year
  // echo date('l') //Day of the week

  // echo date('Y/m/d');
  // echo date('m-d-Y');
  // echo date('M d, Y');

  // echo date('h'); // Hour
  // echo date('i'); // Min
  // echo date('s'); // Seconds
  // echo date('a'); // AM or PM
  
  // Set Time Zone
  date_default_timezone_set('Asia/Manila');

  // echo date('h:i:sa');

  /*
  Unix timestamp is a long integer containing the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and time specified.
  */

  $timestamp = mktime(10, 14, 54, 9, 10, 1981);

  // echo $timestamp;

  // echo date('m/d/y h:i:sa', $timestamp);

  $timestamp2 = strtotime('7:00 March 22 2016');
  $timestamp3 = strtotime('tomorrow');
  $timestamp4 = strtotime('next Monday');
  $timestamp5 = strtotime('+2 Months');
  $timestamp6 = strtotime('+2 Days');

  
  // echo $timestamp2;

  echo date('m/d/y h:i:sa', $timestamp6); 

  // you can visit http://php.net/manual/en/function.date.php for the manual
?>