<!DOCTYPE html>

<head>
    <title>Edit Profil | Percakapan Netizen</title>
    <link rel="stylesheet" href="./Profile-edit/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Main Page/css/all.css">
    <link rel="stylesheet" href="./Main Page/css/fonts.css">
</head>

<body>
    <!--nav-->
    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="index.php"><img src="./Profile-edit/assets/logo/PN full color.png" alt="Logo"></a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
            <ul class="nav-items">
                    <li class="nav-link">
                        <a href="index.php">Berita Terkini</a>
                    </li>
                    <li class="nav-link">
                        <a href="ShareStory.php">Sampaikan Cerita Anda</a>
                    </li>
                    <li class="nav-link">
                        <a href="contact.php">Yuk Kenalan</a>
                    </li>
                    <li class="nav-link">
                        <?php
                            session_start(); 
                            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
                            {
                        ?>
                                <a href="profil2.php">Berita Favorit Anda</a>
                        <?php
                            }
                            else
                            {
                        ?>
                                <a href="SignupLogin.php">Masuk atau Daftar</a>
                        <?php
                            }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--title-->
    <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
        {

        }
        else
        {
            header('Location:SignupLogin.php');
        }
    ?>

    <div class="container">
        <!-- <div class="header"></div> -->
    <div class="header">
      <?php 
        include('config.php'); 
        $nama=$_SESSION['username'];
        $profil=pg_query("SELECT icon FROM DAFTAR_USER WHERE username='$nama'");
        $val=pg_fetch_array($profil);
      ?>
      <img src="<?php echo $val['icon']; ?>" alt="Profile Picture">
      <h1>
        <?php 
          $nama=$_SESSION['username'];
          $pgsql=pg_query("SELECT COUNT(nama_lengkap) FROM DAFTAR_USER WHERE username='$nama'");

          if($pgsql==0)
          {
            echo "Nama Pengguna";
          }

          else
          {
            $psql=pg_query("SELECT nama_lengkap FROM DAFTAR_USER WHERE username='$nama'");
            $hasil=pg_fetch_array($psql);
            echo $hasil['nama_lengkap'];
          }
        ?>
      </h1>
      <p>
      <?php 
          include("config.php");

          $nama=$_SESSION['username'];
          $pgsql=pg_query("SELECT COUNT(deskripsi) FROM DAFTAR_USER WHERE username='$nama'");

          if($pgsql==0)
          {
            echo "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
          }

          else
          {
            $psql=pg_query("SELECT deskripsi FROM DAFTAR_USER WHERE username='$nama'");
            $hasil=pg_fetch_array($psql);
            echo $hasil['deskripsi'];
          }
        ?>
      </p>
    </div>

        <form action="prosesUpload.php" method="POST" enctype="multipart/form-data">
            <h1>Unggah Gambar Anda</h1>
                <input type="file" class="name" name="gambar">
            <h1>Unggah Cerita Anda</h1>
                <input type="file" class="mail" name="kisah">
            <h1></h1>
            <p>
                <input type="submit" class="save" name="unggah" value="Unggah" alt="save"> 
                <input type="submit" class="cancel" name="batal" value="Batal" alt="Batal">
            </p>
        </form>
    <!-- </div> -->
</body>