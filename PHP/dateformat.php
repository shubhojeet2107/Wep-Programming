<!-- A php program for exception handling for checking date fromat -->

<?php
class InvalidDateFormatException extends Exception {}

function checkDateFormat($date) {
    $format = 'Y-m-d'; // Desired date format
    $d = DateTime::createFromFormat($format, $date);
    
    if (!$d || $d->format($format) !== $date) {
        throw new InvalidDateFormatException("Invalid date format. Please use YYYY-MM-DD.");
    }
    return true;
}

try {
    $date = "2024-12-31"; // Example date
    checkDateFormat($date);
    echo "The date '$date' is valid.";
} catch (InvalidDateFormatException $e) {
    echo "Error: " . $e->getMessage();
}
?>
