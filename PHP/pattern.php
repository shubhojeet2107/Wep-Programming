<!-- php program to print * * * * *
                           * * * *
                            * * *
                             * *
                              * -->




                              
<?php
function printPattern($rows) {
    for ($i = $rows; $i >= 1; $i--) {
        // Print leading spaces
        for ($space = 0; $space < $rows - $i; $space++) {
            echo " ";
        }
        // Print stars
        for ($star = 1; $star <= $i; $star++) {
            echo "* ";
        }
        echo "\n"; // Move to the next line
    }
}

// Number of rows for the pattern
$rows = 5;
printPattern($rows);
?>
