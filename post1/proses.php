<?php
    $bilangan = $_POST ["bil1"];
    $bilangan2 = $_POST ["bil2"];
    $total = $bilangan*$bilangan2

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh request POST</title>
</head>
<body>
    <h1>input dua bilangan </h1>

    <?php
        echo "<p>anda telah memasukan bilangan pertama = ".$bilangan."</p>";
        echo "<p>anda telah memasukan bilangan kedua = ".$bilangan2."</p>";
        echo "<p>hasil perkaliannya = ".$total."</p>";

    ?>
</body>
</html>