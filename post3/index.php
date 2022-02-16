<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>belajar percabangan</title>
  </head>
  <body>
    <h1>kasus</h1>
    <p>Buatlah form untuk memasukkan bilangan yang menyatakan tahun. Setelah form 
tersebut disubmit, maka akan muncul apakah tahun tersebut termasuk tahun 
kabisat atau tidak. Gunakan script PHP untuk membuat hal ini.</p>
<br>
<b>jawab : </b>
    <form action="output.php" method="post" >
      <label>tahun </label><br />
      <input type="text" name="tahun" placeholder="masukan tahun " /><br />
      <br />
      <input type="submit" value="kirim" name="input">
    </form>
  </body>
</html>
