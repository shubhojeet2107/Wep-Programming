<!-- A php program for searching of data by different criteria -->

<?php
$data = [
    ["id" => 1, "name" => "Alice", "age" => 25, "city" => "New York"],
    ["id" => 2, "name" => "Bob", "age" => 30, "city" => "Los Angeles"],
    ["id" => 3, "name" => "Charlie", "age" => 22, "city" => "Chicago"],
    ["id" => 4, "name" => "Diana", "age" => 28, "city" => "New York"],
    ["id" => 5, "name" => "Eve", "age" => 30, "city" => "Chicago"],
];

$criteria = ["age" => 30, "city" => "Chicago"];
$result = array_filter($data, fn($item) => array_intersect_assoc($criteria, $item) == $criteria);

print_r($result);
?>
