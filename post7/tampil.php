<?php
    if (isset($_POST['input'])){
        $film = $_POST["film"];
        echo "film kartoon favorit anda adalah : 
        <font color=blue><b>$film</b></font>";
    }
?>