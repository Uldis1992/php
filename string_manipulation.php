<?php
// Define 2 strings
$string1 = "Monday";
$string2 = "Friday";

// 1. Strings Concatenation
$concatenatedString = $string1 . ", " . $string2 . "!";
echo "Concatenated String: " . $concatenatedString . "\n";

// 2. Convert to Uppercase
$upperCaseString = strtoupper($string1) . ", " . $string2;
echo "Uppercase String: " . $upperCaseString . "\n";

// 3. String length
$stringLength = strlen($concatenatedString);
echo "String length: " . $stringLength . "\n";
?>