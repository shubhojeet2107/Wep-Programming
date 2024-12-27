<!-- A php program to generate Prime numbers -->

<?php
function generatePrimes($limit) {
    for ($num = 2; $num <= $limit; $num++) {
        $isPrime = true;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) echo $num . " ";
    }
}

// Generate primes up to a given limit
$limit = 50; // Change this value for a different range
generatePrimes($limit);
?>
