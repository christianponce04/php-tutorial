<?php
// Function to test a given number using ternary operators
function trinary_Test($n){
    // Ternary operators used to check the value of $n and assign a corresponding message to $r
    $r = $n > 30
        ? "greater than 30"
        : ($n > 20
            ? "greater than 20"
            : ($n > 10
                ? "greater than 10"
                : "Input a number at least greater than 10!"));

    // Display the result with the input number
    echo $n . " : " . $r . "\n";
}

// Test the function with different input values
trinary_Test(32) ;
trinary_Test(21);
trinary_Test(12);
trinary_Test(4);
?>