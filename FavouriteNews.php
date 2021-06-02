<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita Favorit</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="Favourite News/css/all.css">
    <link rel="stylesheet" href="Favourite News/css/fonts.css">

    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="Favourite News/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Favourite News/css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="Favourite News/css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="Favourite News/css/Style.css">
</head>

<body>
    <!-- ----------------------------  Navigation ---------------------------------------------- -->
    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="index.php" class="text-gray">Percakapan Netizen</a>
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
                        <a href="#">Yuk Kenalan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ------------x---------------  Navigation --------------------------x------------------- -->
    <!----------------------------- Main Site Section ------------------------------>
    <main>
        <!------------------------ Site Title ---------------------->
        <section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                <h3>Berita Terkini</h3>
                <h1>Menginspirasi Melalui Informasi</h1>
                <h2>Berita Favorit Anda</h2>
            </div>
        </section>
        <!------------x----------- Site Title ----------x----------->

        <!-- --------------------- Blog Carousel ----------------- -->
        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <?php
				            include("config.php");
                            session_start();
                            $nama=$_SESSION['username'];
				            $pgsql=pg_query("SELECT nama_halaman FROM simpan_berita WHERE username='$nama'");                                
	
				            while($val=pg_fetch_array($pgsql))
				            {
					            $temp=$val['nama_halaman'];
					            $query=pg_query("SELECT * FROM daftar_news WHERE nama_halaman='$temp'");
					            $hasil=pg_fetch_array($query);
		            	?>
                                <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                                    <img src="<?php echo $hasil['nama_gambar'];?>" alt="post-1">
                                    <div class="blog-title">
                                        <a href="<?php echo $hasil['nama_halaman'];?>">
                                            <h3><?php echo $hasil['nama_berita'];?></h3>
                                        </a>
                                        
                                        <a href="<?php echo $hasil['nama_halaman'];?>">
                                            <button class="btn btn-blog">Baca Lebih Lanjut</button>
                                        </a>
                                    </div>
                                </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- ----------x---------- Blog Carousel --------x-------- -->
    </main>

    <!-- --------------------------- Footer ---------------------------------------- -->

    <footer class="footer">
        <div class="container">
            <div class="about-us" data-aos="fade-right" data-aos-delay="200">
                <h2>About us</h2>
                <p>Asmi Devi Azizah G64190009</p>
                <p>Muhammad Ikhsan Ananda</p>
                <p>Ramadhanti Nisa Permanahadi</p>
            </div>
            
        </div>
        <div class="rights flex-row">
            <h4 class="text-gray">
                Copyright ©2021 All rights reserved | made by RPL Teams
            </h4>
        </div>
        <div class="move-up">
            <span><i class="fas fa-arrow-circle-up fa-2x"></i></span>
        </div>
    </footer>

    <!-- Jquery Library file -->
    <script src="Favourite News/js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="Favourite News/js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="Favourite News/js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="Favourite News/js/main.js"></script>
</body>

</html>