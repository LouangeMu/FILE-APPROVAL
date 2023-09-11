<?php
// Generate a random number with a size of 4
$randomNumber = rand(10000, 99999); // Generates a random number between 1000 and 9999

// Convert the random number to a string
$randomString = strval($randomNumber);

// Output the generated random number
echo $randomString;
?>
