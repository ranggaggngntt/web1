<?php
$todayDate = date('d M Y'); // Get the current date
$futureDate = date('d-m-Y', strtotime('+1000 day', strtotime($todayDate)));
$pastDate = date('d-m-Y', strtotime('-500 day', time()));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
        Tanggal hari ini = <?= $todayDate; ?>
        <br>
        Tanggal 1000 Hari dari sekarang = <?= $futureDate; ?>
        <br>
        Tanggal 500 Hari yang lalu = <?= $pastDate; ?>
    </h3>
</body>
</html>
