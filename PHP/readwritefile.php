<!-- A php program to read and write files using form control -->

<?php
// Handle file write
if (isset($_POST['write'])) {
    $content = $_POST['content'];
    file_put_contents('file.txt', $content);
}

// Handle file read
if (isset($_POST['read'])) {
    $content = file_get_contents('file.txt');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read and Write File</title>
</head>
<body>

    <h3>Write to File</h3>
    <form method="post">
        <textarea name="content" rows="5" cols="40"></textarea><br><br>
        <input type="submit" name="write" value="Write to File">
    </form>

    <h3>Read from File</h3>
    <form method="post">
        <input type="submit" name="read" value="Read from File"><br><br>
    </form>

    <?php if (isset($content)): ?>
        <h4>File Content:</h4>
        <pre><?php echo htmlspecialchars($content); ?></pre>
    <?php endif; ?>

</body>
</html>
