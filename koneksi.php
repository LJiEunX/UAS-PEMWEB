<?php
    error_reporting(0);
    session_start();
    $host = "localhost";
    $username = "root";
    $password = "";
    $databasename = "jadwal_sidang";
    $connection = mysql_connect($host, $nim, $password) or die (mysql_error());
    mysql_select_db($databasename, $connection) or die (mysql_error());
?>
