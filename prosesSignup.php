<?php
include("config.php");
//cek apakah tombol udah di klik
if(isset($_POST['daftar']))
{
    //ambil data dari formulir
    $username=$_POST['username'];
    $email=$_POST['email'];
    $pass=$_POST['passwordorg'];
    $cpass=$_POST['cpassword'];

    //buat query
    $query=pg_query("INSERT INTO daftar_user(username, email, passwordorg, cpassword) VALUEs('$username', '$email', '$pass', '$cpass')");

    //apakah berhasil
    if($query==TRUE && $pass==$cpass)
    {
        header('Location:SignupLogin.php');
    }
    else
    {
        echo "<script>
                window.location.href='SignupLogin.php';
                alert('Daftar gagal atau password tidak cocok');
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
