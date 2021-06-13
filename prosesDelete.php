<?php
include("config.php");
//cek apakah tombol udah di klik
$halaman=$_GET['halaman'];
session_start();
$nama=$_SESSION['username'];
$pgsql=pg_query("DELETE FROM simpan_berita WHERE username='$nama' AND nama_halaman='$halaman'");
header('Location:profil2.php');