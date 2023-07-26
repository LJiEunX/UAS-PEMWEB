<?php
    include "koneksi.php";

    $nIM = $_POST('nim');
    $password = $_POST('password');

    $sql = mysql_query("SELECT * FROM jadwal_sidang WHERE nim = '".$nim."' AND password = '".$password."' ") or die (mysql_erroe());

    if (mysql_num_rows($sql) == 0){
        echo '<script language = "javascript">
        alert ("NIM dan Password Salah"); document.location="login.php"; </script>';
    }else{
        echo '<script language = "javascript">
        alert ("Login Berhasil"); document.location="home-setelah-login.html" </script>';
    }
?>
