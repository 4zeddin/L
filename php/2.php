<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $age = $_POST["age"];

    $_SESSION['userData'] = [
        'name' => $name,
        'age' => $age,
    ];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
</head>

<body>

    <h2>User Information</h2>

    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>

        <button type="submit">Add to Table</button>
    </form>

    <?php

    $userData = isset($_SESSION['userData']) ? $_SESSION['userData'] : [];
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Age</th></tr>";

    foreach ($userData as $attribute => $value) {
        echo '<tr><td>' . htmlspecialchars($attribute) . '</td><td>' . htmlspecialchars($value) . '</td></tr>';
    }

        echo "</table>";
    ?>

</body>

</html>