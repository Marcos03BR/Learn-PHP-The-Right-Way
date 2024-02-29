<?php
// Introduction to Data Types & Casting

// Dynamically Typed vs Statically Typed
// PHP is dynamically typed, meaning that you don't need to declare the data type of a variable explicitly.

// Scalar Types: bool, int, float, string
$booleanValue = true; // Boolean
$intValue = 10; // Integer
$floatValue = 3.14; // Float
$stringValue = "Hello, World!"; // String

// Get The Type Of The Variable (gettype, var_dump)
echo "Type of booleanValue: " . gettype($booleanValue) . "\n";
var_dump($intValue); // var_dump provides more detailed information about the variable

// Arrays (Compound Types)
$arrayValue = array(1, 2, 3, 4, 5); // Indexed Array

// Print the contents of arrays
echo "Contents of arrayValue:\n";
print_r($arrayValue);

// Automatic Type Detection
$automaticValue = "10";
$result = $automaticValue + 5; // PHP automatically converts $automaticValue to integer
echo "Result of automaticValue + 5: $result\n";

// Type Hinting Example
function greet(string $name) {
    echo "Hello, $name!\n";
}
greet("Alice");

// Type Juggling / Type Coercion
$numberString = "10";
$result = $numberString + 5; // Type juggling: PHP converts $numberString to integer
echo "Result of numberString + 5: $result\n";

// Strict Types
declare(strict_types=1); // Enable strict type checking
function add(int $a, int $b) {
    return $a + $b;
}
// echo add("10", 5); // This will result in a TypeError because of strict type checking

// Type Casting
$intValue = 10;
$castedFloatValue = (float) $intValue; // Type casting: Convert integer to float
echo "Casted float value: $castedFloatValue\n";

?>