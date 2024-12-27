<!-- A php program to to set and retrieve a cookie -->

<?php
// Set a cookie
if (!isset($_COOKIE["user"])) {
    setcookie("user", "JohnDoe", time() + (86400 * 30), "/"); // expires in 30 days
}

// Retrieve and display the cookie value
if (isset($_COOKIE["user"])) {
    $user = $_COOKIE["user"];
} else {
    $user = "Cookie not set.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookie Example</title>
</head>
<body>

<h3>Set and Retrieve Cookie</h3>
<p>User: <?php echo $user; ?></p>

</body>
</html>

