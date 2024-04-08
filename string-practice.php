<?php

/* Excercise 1; Create a program that will take 5 last characters of a string and display them. */

$str="Hello World";     // Provide the string to be processed
$lastFiveChars = substr($str, -5);      // Get last five characters
echo $lastFiveChars .'<br>';        // Display last five characters
echo "Five last characters: <br>";      // Display message


// Excercise 2: Create a program that will delete the first word of a string and display the rest of it.
// Input: Tran Quang Dai
// Output: Quang Dai

$originalString = "Tran Quang Dai";        // Provide the string to be processed

// Calculate the position of the first space
$firstSpacePosition = strpos($originalString, ' ');        // Find the position of the first space          //Syntax: strpos('chuoi can xu li', 'ky tu can tim')
$restOfString = substr($originalString, $firstSpacePosition + 1);        // Get the rest of the string      //Syntax: substr('chuoi can xu li', 'vi tri bat dau', 'do dai chuoi can cat')
echo $restOfString;        // Display the rest of the string
echo "<br>";