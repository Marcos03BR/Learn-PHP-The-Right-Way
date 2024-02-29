<?php
// Basic Syntax

// Hello World
echo "Hello, World!";

// Run PHP In Terminal
// In terminal, navigate to the directory containing this file and run:
// php filename.php

// Print vs Echo
print("Using print statement.\n");
echo "Using echo statement.\n";

/*
    Difference between print and echo:
    - print(): Can only take one argument and always returns 1.
    - echo: Can take multiple arguments and does not have a return value.
*/

// Escaping Quotes
echo "He said, \"Hello!\"\n";

// Difference between " and '
echo 'Single quotes don\'t parse variables: $name\n';
echo "Double quotes parse variables: $name\n";

// Variables
/*
Variables in PHP:
- Must start with a letter or underscore (_)
- Cannot start with a number or special character
- Can only contain letters, numbers, and underscores
- Case-sensitive
*/
$message = "Hello, World!";
echo $message;

// Valid variable names:
$_validVariable = "Valid variable name";
$anotherVariable = "Another valid variable name";

// Invalid variable names:
// $1invalidVariable = "Invalid variable name";
// $!invalidVariable = "Invalid variable name";

// Echo with multiple things
$name = 'Marcos';
echo 'Hello' . $name . "\n"; // Output: HelloMarcos

// $this variable
// $this is a special variable in PHP, commonly used in object-oriented programming. This name cannot be used as a normal variable.

// Assigning by Value vs Reference
$a = 5;
$b = $a; // $b now holds the value of $a (assigned by value)
$b = 10;
echo "Value of \$a: $a\n"; // Output: 5

$x = 5;
$y = &$x; // $y is a reference to $x (assigned by reference)
$y = 10;
echo "Value of \$x: $x\n"; // Output: 10

// Variables Within Text
$name = "Marcos";
echo "Hello, $name!\n"; // Output: Hello, Marcos!

// PHP In HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP in HTML</title>
</head>
<body>
    <h1><?php echo "Hello, World!"; ?></h1>
</body>
</html>

<?php
// Comments
// This is a single-line comment

/*
This is a
multi-line
comment
*/

?>
