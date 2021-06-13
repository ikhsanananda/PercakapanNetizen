<!DOCTYPE html>
<head>
  <title>Profil | Percakapan Netizen</title>
  <link rel="stylesheet"href="./profile2/css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Main Page/css/all.css">
  <link rel="stylesheet" href="./Main Page/css/fonts.css">
</head>

<body>

  <!--nav-->
  <nav class="nav">
         <div class="nav-menu flex-row">
             <div class="nav-brand">
                 <a href="#"><img src="Profile2/assets/logo/PN full color.png" alt="Logo"></a>
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
  <div class="container">
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
      <a href="./profil-edit.php">Edit Profil</a>
    </div>

    <hr>
    <div id="artikel">
      <div class="navigasi flex-row">
        <a href="profil1.php" class="buatan"><u>Berita Buatan</u></a><a href="#artikel" class="suka">Berita Disukai</a>
      </div>
      <?php
        $nama=$_SESSION['username'];
				$pgsql=pg_query("SELECT nama_halaman FROM simpan_berita WHERE username='$nama'");                                
	
				while($val=pg_fetch_array($pgsql))
				{
					  $temp=$val['nama_halaman'];
					  $query=pg_query("SELECT * FROM daftar_news WHERE nama_halaman='$temp'");
					  $hasil=pg_fetch_array($query);
		  ?>
          <div class="news">
            <img src="<?php echo $hasil['nama_gambar'];?>" alt="Gambar Artikel">
            <div class="text">
                <a href="<?php echo $hasil['nama_halaman'];?>">
                  <h2><?php echo $hasil['nama_berita'];?></h2>
                </a>
                <div class="post-info flex-row">
                  <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                  <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;<?php echo $hasil['tanggal_berita'];?></span>
                  <span class="unlike">  
                      <a href="prosesDelete.php?halaman=<?php echo $hasil['nama_halaman'];?>">
                      <input type="submit" class="delete" value="Unlike" name="hapus">
                      </a>
                  </span>
                </div>
                <p class="desc"><?php echo $hasil['deskripsi_berita'];?></p>
            </div>
          </div>
          <hr>
      <?php
        }
      ?>
    </div>
  </div>
</body>
