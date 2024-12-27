<!-- A php program to generate Fibonacci series -->

<?php
// Recursive function to calculate Fibonacci numbers
function fibonacci($n) {
    if ($n == 0) return 0;
    if ($n == 1) return 1;
    return fibonacci($n - 1) + fibonacci($n - 2);
}

// Generate and display the Fibonacci series
$terms = 10; // Number of terms in the series
echo "Fibonacci series for $terms terms: ";
for ($i = 0; $i < $terms; $i++) {
    echo fibonacci($i) . " ";
}
?>
