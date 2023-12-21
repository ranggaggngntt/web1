<?php
// Replace these values with your actual birthdate
$birthYear = 2003;
$birthMonth = 2;
$birthDay = 13;

// Create a timestamp for the birthdate using mktime()
$birthTimestamp = mktime(0, 0, 0, $birthMonth, $birthDay, $birthYear);

// Format the birthdate for display
$birthdate = date('l, d F Y', $birthTimestamp);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanggal Lahir</title>
</head>
<body>
    <h3>
        Tanggal Lahir: <?= $birthdate; ?>
    </h3>
</body>
</html>
