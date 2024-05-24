<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Information</title>
</head>
<body>
<?php
if (isset($_GET['age'])) {
    $age = $_GET['age'];
    if ($age < 100) {
        echo "<p>You are $age years old.</p>";
    } else {
        echo "<p>Invalid Input</p>";
    }
} else {
    echo "<p>No age provided.</p>";
}
?>
</body>
</html>