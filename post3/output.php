
<?php
// menentukan aapakah tahun kabisat atau bukan 
  $tahun = $_POST["tahun"];
  if (isset ($_POST["input"])) {

    if ($tahun %4 == 0){
      echo $tahun." merupakan tahun kabisat";
    } else {
      echo $tahun. " bukan tahun kabisat";
    }
  }


?>
