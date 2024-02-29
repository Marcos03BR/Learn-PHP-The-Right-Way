<?php
/* BOOLEAN DATA TYPE */

// Examples of values that evaluate to false in PHP:
// integers: 0, -0 = false
// floats: 0.0, -0.0 = false
// empty strings: '', "", = false
// string '0' = false
// empty arrays = false
// null = false

$isComplete = false; // Assigning a boolean value to the variable $isComplete

// Check if $isComplete is a boolean
var_dump(is_bool($isComplete)); // Outputs the result of the is_bool() function, which checks if $isComplete is a boolean

// Conditional statement based on the value of $isComplete
if ($isComplete) {
    // If $isComplete is true, do something
    echo 'Success';
} else {
    // If $isComplete is false, do something else
    echo 'Fail';
}

?>