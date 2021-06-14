<?php
    include('config.php');
    if(isset($_POST['save']))
    {
        session_start();
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
        {   
            $nama=$_SESSION['username'];

            $nama_lengkap=$_POST['name'];
            $desc=$_POST['desc'];
            $mail=$_POST['e-mail'];
            $opass=$_POST['old-password'];
            $npass=$_POST['new-password'];
            $cpass=$_POST['c-password'];

            $pgsql=pg_query("SELECT * FROM DAFTAR_USER WHERE USERNAME='$nama'");
            $result=pg_fetch_array($pgsql);
            $verif=password_verify($opass, $result['passwordorg']);

            if($verif)
            {
                if($npass==$cpass)
                {
                    $query=pg_query("UPDATE DAFTAR_USER SET nama_lengkap='$nama_lengkap', email='$mail', deskripsi='$desc', passwordorg='$npass', cpassword='$cpass' WHERE username='$nama'");
                }
                else
                {
                    echo "<script>
                    window.location.href='profil-edit.php';
                    alert('Password tidak cocok');
                    </script>";
                }
                header('Location:profil2.php');
            }
            else
            {
                echo "<script>
                    window.location.href='profil-edit.php';
                    alert('Password lama tidak cocok');
                    </script>";
            }
        }
        else
        {
            header('Location:SignupLogin.php');
        }
    }
    elseif(isset($_POST['cancel']))
    {
        header('Location:profil2.php');
    }
?>
