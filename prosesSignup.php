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

    $query=pg_query("SELECT COUNT(username) FROM daftar_user where username='$username'");
    if($query=='0')
    {
            //apakah berhasil
        if($pass==$cpass)
        {
            //buat query
            $pass=password_hash($pass, PASSWORD_DEFAULT);
            $cpass=password_hash($cpass, PASSWORD_DEFAULT);

            $query=pg_query("INSERT INTO daftar_user(username, email, passwordorg, cpassword) VALUEs('$username', '$email', '$pass', '$cpass')");
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
                    alert('Username telah ada, pilih username lainnya');
                </script>";
    }
    }
?>
