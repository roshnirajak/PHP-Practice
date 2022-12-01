<?php
    $server="sql305.epizy.com";
    $username="epiz_33114992";
    $password="IcG0AMekuazCvVv";
    $dbname="epiz_33114992_woosung_fanpage";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    if(!$conn){
        die("Connection Failed Bitch: ".mysqli_connect_error());
    }
?>