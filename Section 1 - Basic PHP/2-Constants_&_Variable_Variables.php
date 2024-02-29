<?php
// Introduction to Constants and Variable Variables

// Using define()
define("PI", 3.14159);
echo "The value of PI is: " . PI . "\n";

// Constant Naming Rules
// Constants must start with a letter or underscore, followed by letters, numbers, or underscores
define("_MAX_SIZE", 100);
echo "The maximum size is: " . _MAX_SIZE . "\n";

// Print Constants
echo "The value of PI is still: ", PI, "\n";

// Check if a Constant is Defined
echo defined('PI');

// Using Const Keyword
const SITE_NAME = "My Website";
echo "The site name is: " . SITE_NAME . "\n";

// Differences between define() and const
// define() can be used anywhere, even inside functions or conditionals, while const can only be used at the top level of the file.
// const is more strict in terms of naming conventions.

// Dynamic Constant Names
$dynamicConstantName = "APP_VERSION";
define($dynamicConstantName, "1.0");
echo "The app version is: " . constant($dynamicConstantName) . "\n";

// When To Use Constants
// Use constants for values that should not change during the execution of the script, like configuration settings or mathematical constants.

// Predefined Constants
echo "The current PHP version is: " . PHP_VERSION . "\n";

// Magic Constants
echo "This file is located at: " . __FILE__ . "\n";
echo "The line number of this code is: " . __LINE__ . "\n";

// Variable Variables
$variableName = "message";
$$variableName = "Hello, World!";
echo $message . "\n";

?>