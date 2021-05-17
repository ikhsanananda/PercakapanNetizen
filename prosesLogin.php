<?php
include("config.php");
//cek apakah tombol udah di klik
if(isset($_POST['masuk']))
{
    extract($_POST);
    $username=$_POST['username'];
    $pass=$_POST['passwordorg'];
    $pgsql=pg_query("SELECT * FROM DAFTAR_USER WHERE USERNAME='$username'");
    $result=pg_fetch_array($pgsql);

    //apakah berhasil
    if(($result['username']==$username)&&($result['passwordorg']==$pass))
    {
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION["login_time_stamp"] = time();
        header('Location:ceklogin.php');
    }
    else
    {
        echo "Username atau Password salah";
    }
}
else 
{
    die("Akses gagal...");
}
?>
