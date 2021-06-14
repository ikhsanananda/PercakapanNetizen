<?php
include("config.php");
//cek apakah tombol udah di klik
if(isset($_POST['masuk']))
{
    extract($_POST);
    $nama="belum login";
    $username=$_POST['username'];
    $pass=$_POST['passwordorg'];
    $pgsql=pg_query("SELECT * FROM DAFTAR_USER WHERE USERNAME='$username'");
    $result=pg_fetch_array($pgsql);
    
    session_start();
    $_SESSION['loggedin']=false;

    //apakah berhasil
    $verif=password_verify($pass, $result['passwordorg']);
    if(($result['username']==$username)&&($verif))
    {
        $nama=$username;
        $_SESSION['loggedin']=true;
        $_SESSION["login_time_stamp"] = time();
        $_SESSION['username'] = $nama;
        header('Location:ceklogin.php');
    }
    else
    {
        echo "<script>
                window.location.href='SignupLogin.php';
                alert('Username atau Password Salah, Silahkan Masuk kembali atau Daftar');
            </script>";
    }
}
else 
{
    echo "<script>
                window.location.href='SignupLogin.php';
                alert('Akses gagal...');
            </script>";
}
?>
