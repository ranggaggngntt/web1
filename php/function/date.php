<?php

$todayDate = "30 nov 2023";
$returnDate = date('d-m-Y', strtotime('+1000 day', strtotime($todayDate)));
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
        Tanggal 1000 Hari dari sekarang = <?= $returnDate; ?>
    </h3>
</body>
</html>