<?php
$koneksi = mysql_connect("localhost","root","","db_carwash");

$kd_mobil = $_POST['kd_mobil'];
$merk_mobil = $_POST['merk_mobil'];
$nopol = $_POST['nopol'];

$query = "INSERT INTO mobil VALUES('kd_mobil','merk_mobil','nopol')";

?>