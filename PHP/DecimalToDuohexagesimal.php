<?php

// Test / Example usage
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);

$array = array();

for ($i = 1; $i <= 100000; $i++) {
    $array[$i] = decimalToDuohexagesimal($i);
}

foreach($array as $value) {
  echo $value.'<br>';
}



// Main function (where the magic happens)
// Call with int, get a string
function decimalToDuohexagesimal($input) {
  $array = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');

  $nextDec = $input;
  $rest = 0;
  $result = '';

  do {
    $rest = $nextDec % sizeof($array);
    $nextDec = (int) ($nextDec / sizeof($array));
    $result .= $array[$rest];
  } while($nextDec > 0);
  
  return strrev($result);
}