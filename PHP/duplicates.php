<!-- A php program to remove duplicate from a sorted list. -->

<?php
function removeDuplicates1($sortedList) {
    return array_unique($sortedList);
}

// Example usage
$sortedList = [1, 2, 2, 3, 4, 4, 5];
$result = removeDuplicates1($sortedList);
print_r($result);
?>




<?php
function removeDuplicates2($sortedList) {
    $result = [];
    $prev = null;
    foreach ($sortedList as $value) {
        if ($value !== $prev) {
            $result[] = $value;
            $prev = $value;
        }
    }
    return $result;
}

// Example usage
$sortedList = [1, 2, 2, 3, 4, 4, 5];
$result = removeDuplicates2($sortedList);
print_r($result);
?>
