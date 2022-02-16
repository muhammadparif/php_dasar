<?php
    $saldo_awal = $_POST["saldo_awal"];
    $bunga_perbulan = $_POST["bunga_perbulan"];
    $lama_bulan = $_POST["lama_bulan"];
    $saldo_akhir = $saldo_awal+($saldo_awal*$lama_bulan*$bunga_perbulan);

    echo "Saldo akhir setelah ".$lama_bulan." bulan adalah : Rp. ".$saldo_akhir. ",-";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar POST</title>
</head>
<body>
    <p>klik <a href="index.html">disini </a>untuk kembali ke laman sebelumnya</p>
</body>
</html>