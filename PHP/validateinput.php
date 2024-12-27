<!-- A php program to validate input -->

<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the input is empty
    if (empty($_POST["name"])) {
        $error = "Name is required.";
    } else {
        $name = $_POST["name"];
        // Check if the name is valid (only letters and spaces)
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $error = "Only letters and spaces are allowed.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input Validation</title>
</head>
<body>

<h2>Input Validation Example</h2>
<form method="post">
    Name: <input type="text" name="name"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($error) {
    echo "<p style='color: red;'>$error</p>";
}
?>

</body>
</html>
