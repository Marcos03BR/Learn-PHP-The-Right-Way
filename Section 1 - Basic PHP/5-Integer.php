<?php
/* INTEGER DATA TYPE */

// Different representations of integers
$decimalInt = 10; // Decimal integer
$binaryInt = 0b1010; // Binary integer (10 in decimal)
$octalInt = 012; // Octal integer (10 in decimal)
$hexInt = 0xA; // Hexadecimal integer (10 in decimal)

// Differences between 32-bit and 64-bit systems
// PHP_INT_MAX is the largest integer supported by the current PHP build
echo "PHP_INT_MAX on this system: " . PHP_INT_MAX . "\n";

// Type casting to integer using (int)
$floatValue = 3.14;
$intValue = (int) $floatValue; // Type casting float to integer
echo "Type casting float to integer: $intValue\n";

// Checking if a variable is an integer using is_int()
$x = (int) null;
var_dump(is_int($x)); // Outputs: bool(false)

// Using underscores for readability (Available in PHP 7.4 and later)
$largeNumber = 2_000_000; // This appears as 2000000 but is still an integer, not a string
echo "Large number with underscores: $largeNumber\n";

?>