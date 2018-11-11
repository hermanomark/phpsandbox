<?php

// People Array @TODO from DB
$people[] = "Steve";
$people[] = "Joe";
$people[] = "John";
$people[] = "Mark";
$people[] = "Jason";
$people[] = "Jaso";
$people[] = "Gelo";
$people[] = "Nestor";
$people[] = "Mic";
$people[] = "Myrna";
$people[] = "Kate";
$people[] = "Ulysses";
$people[] = "Monique";
$people[] = "Finn";
$people[] = "Doe";
$people[] = "Chandler";
$people[] = "Joey";
$people[] = "Phoebe";
$people[] = "Rachel";
$people[] = "Monica";
$people[] = "Barney";
$people[] = "Dan";
$people[] = "Tamara";
$people[] = "Josie";
$people[] = "Jillian";
$people[] = "Malcolm";
$people[] = "Greg";
$people[] = "Mary";
$people[] = "Brad";
$people[] = "Mike";
$people[] = "Amanda";
$people[] = "Rhonda";
$people[] = "Tom";
$people[] = "Kathy";
$people[] = "Evan";

// Get Query String

// using the request global here so if you happen to use get or post it would work
$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions 
if ($q !== "") {
  $q = strtolower($q);
  $len = strlen($q);
  foreach($people as $person) {
    // stristr() find the first occurence whatever the q is, inside the person
    // substr() return part of a string
    if (stristr($q, substr($person, 0, $len))) {
      if ($suggestion === "") {
        $suggestion = $person;
      }
      else {
        $suggestion .= ", $person";
      }
    }
  }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;

?>