<?php
    if (isset($_POST["input"])){
        $usia = $_POST["usia"];
        if ($usia == 0 && $usia <= 5){
            echo "usia anda ".$usia." anda masih balita";
        } elseif ($usia > 5 && $usia <= 16){
            echo "usia anda ".$usia." anda masih anak-anak";
        } elseif ($usia > 50){
            echo "usia anda ".$usia." anda sudah tua";
        } else {
            echo "usia anda ".$usia." anda sudah dewasa";
            
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
    <p>klik <a href="index.html">disini</a> untuk kembali ke laman sebelumnya</p>
</body>
</html>