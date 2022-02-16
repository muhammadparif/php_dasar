<?php
    if (isset($_POST["kirim"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if (($username=="parif" && $password=="123" )|| ($username=="parif123" && $password=="12345")) {
            // jika benar, redirect ke halaman proses.php
            // redirect artinya memindahkan halaman ke halaman lain 
            header("location: proses.php"); // perintah untuk redirect
            // akhiri dengan exit supaya code yang ada dibawahnya tidak di deteksi
            exit;
        } else {
            $eror = true;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>form login</title>
  </head>
  <center>
    <body style="background-color: blue">
      <h2>login Sekarang...</h2>

      <?php if (isset($eror)) {?>
        <p style="color: red; font-style:italic"><b> username /password salah</b></p>
      <?php } ?>
      
      <center>
        <form action="" method="post">
          <table border="0" style="background-color: aqua">
            <tr>
              <td>Username</td>
              <td>:</td>
              <td><input type="text" name="username" size="25" /></td>
            </tr>
            <tr>
              <td>Password</td>
              <td>:</td>
              <td><input type="password" name="password" size="25" /></td>
            </tr>
            <tr>
              <td><button type="submit" name="kirim">Kirim</button></td>
            </tr>
          </table>
        </form>
      </center>
    </body>
  </center>
</html>
