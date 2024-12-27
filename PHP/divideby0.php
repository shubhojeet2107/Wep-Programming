<!-- A php program for exception handling for divided by zero -->

<?php
class DivisionByZeroException extends Exception {}

try {
    $numerator = 10;
    $denominator = 0;

    if ($denominator == 0) {
        throw new DivisionByZeroException("Cannot divide by zero.");
    }

    $result = $numerator / $denominator;
    echo "Result: " . $result;

} catch (DivisionByZeroException $e) {
    echo "Error: " . $e->getMessage();
}
?>
