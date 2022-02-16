<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> pilih Film kartoon favorit kalian :</h2>
    <form action="tampil.php" method="post">
        <select name="film" >
            <option value="upin_ipin">upin_ipin</option>
            <option value="spongebob" selected>spongebob</option>
            <option value="doraemon">doraemon</option>
            <option value="naruto">naruto</option>
            <br>
            <input type="submit" name="input" style="background-color: blue;" value="kirim">
        </select>
    </form>
</body>
</html>