<!-- A php program to change background colour based on day of the week using if else if stattement and using arrays. -->

<!DOCTYPE html>
<html>
<head>
    <title>Background Color Based on Day</title>
</head>
<body style="margin: 0; padding: 0;">

<?php
// Array mapping days to background colors
$dayColors = [
    "Monday" => "#FFCCCC", "Tuesday" => "#FFE4B5", 
    "Wednesday" => "#FFD700", "Thursday" => "#98FB98", 
    "Friday" => "#ADD8E6", "Saturday" => "#DDA0DD", 
    "Sunday" => "#F08080"
];

// Get the current day's background color or default to white
$backgroundColor = $dayColors[date("l")] ?? "#FFFFFF";
?>

<style>
    body {
        background-color: <?php echo $backgroundColor; ?>;
        color: #333;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>

<div>
    <h1>Happy <?php echo date("l"); ?>!</h1>
</div>
</body>
</html>
