<?php
    include('config.php');
    $foto=$_GET['foto'];
    session_start();
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
    {
        $nama=$_SESSION['username'];
        $pgsql=pg_query("SELECT COUNT(icon) FROM DAFTAR_USER WHERE username='$nama'");

        if($pgsql==0)
        {
            $query=pg_query("INSERT INTO DAFTAR_USER (icon) VALUES ('$foto')");
        }   
        else
        {
            $query=pg_query("UPDATE DAFTAR_USER SET icon='$foto' WHERE username='$nama'");
        }
        header('Location:profil-edit.php');
    }
    else
    {
        header('Location:SignupLogin.php');
    }
?>
