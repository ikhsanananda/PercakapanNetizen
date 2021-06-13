<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Microsoft Patenkan Kamera Ponsel yang Mirip Logo Perusahaan</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="Main Page/css/all.css">
    <link rel="stylesheet" href="Main Page/css/fonts.css">

    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="Main Page/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Main Page/css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="Main Page/css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="Main Page/css/Style.css">
</head>

<body>

    <!-- ----------------------------  Navigation ---------------------------------------------- -->

    <nav class="nav">
        <div class="nav-menu flex-row">
            <ul class="nav-img">       
                <a href="index.php">
                        <img src="PN full color.png" alt="Logo">
                </a>  
            </ul>

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



    <!-- ------------x---------------  Navigation --------------------------x------------------- -->

    <!----------------------------- Main Site Section ------------------------------>

    <main>
        <!-- ---------------------- Site Content -------------------------->

        <section class="container">
            <div class="site-content">
                <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="Main Page/assets/mc.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21, 2021</span>
                                <span>
                                <form action="<?php $halaman=basename($_SERVER['PHP_SELF']); echo $halaman; ?>" method="POST">                                        <button name="simpan">
                                                <?php 
                                                    include("config.php");
                                                    $page=basename($_SERVER['PHP_SELF']); 
                                                    if($_SESSION['loggedin']==false)
                                                    {
                                                        header('Location:ceklogin.php');
                                                    }
                                                    else
                                                    {
                                                        $nama_user=$_SESSION['username'];
                                                        $pgsql=pg_query("SELECT count(nama_halaman) FROM simpan_berita WHERE nama_halaman='$page' AND username='$nama_user'");
                                            
                                                        $val = pg_fetch_result($pgsql, 0, 0);
                                                        if($val=='0')
                                                        {
                                                    ?>
                                                            <i class="far fa-heart text-gray"></i>
                                                    <?php    
                                                        }
                                                        else
                                                       {
                                                    ?>
                                                            <i class="fa fa-heart"></i>
                                                    <?php    
                                                        }
                                                    }
                                                    ?>                                  
                                            </button>&nbsp;&nbsp;Like
                                            <?php
                                                if(isset($_POST['simpan']))
                                                {
                                                    include("config.php");
                                                
                                                    if($_SESSION['loggedin']==false)
                                                    {
                                                        header('Location:ceklogin.php');
                                                    }
                                                    else
                                                    {
                                                        $nama_user=$_SESSION['username'];
                                                
                                                        $pgsql=pg_query("SELECT count(nama_halaman) FROM simpan_berita WHERE nama_halaman='$page' AND username='$nama_user'");
                                            
                                                        $val = pg_fetch_result($pgsql, 0, 0);
                                                        if($val=='0')
                                                        {
                                                            $query=pg_query("INSERT INTO simpan_berita(username, nama_halaman) VALUEs('$nama_user', '$page')");
                                                        }
                                                    }
                                                }
                                            ?>
                                    </form>
                                </span>
                            </div>
                        </div>

                        <div class="post-title">
                        <a href="MainpageTekn(9).php">Microsoft Patenkan Kamera Ponsel yang Mirip Logo Perusahaan</a>
                            <p>Logo Microsoft pasti sudah familiar di benak banyak orang. Empat petak bewarna merah, kuning, hijau, dan biru tersusun secara simetris membentuk persegi berukuran lebih besar.</p>
                            <p>Bayangkan jika susunan petak tersebut adalah lensa kamera. Tampaknya, Microsoft juga penasaran bagaimana hasilnya. Dari laporan Let's Go Digital, Microsoft telah mematenkan teknologi kamera bawah layar yang disusun sesuai logo mereka.</p>
                            <p>Rancangan ini terdiri dari empat kamera yang membentuk satu kesatuan berbentuk persegi. Masing-masing kamera akan memiliki filter warna sesuai dengan logo khas Microsoft, yakni merah, hijau, biru, dan kuning</p>
                            <p>Saat sedang tidak sedang digunakan, rangkaian pixel di atas keempat kamera bisa menyala sehingga membentuk logo Microsoft. Nyala cahaya tersebut juga bisa digunakan sebagai penanda notifikasi di ponsel.</p>
                            <p>Dalam dokumen paten, tiap kamera dioptimalkan untuk menangkap cahaya sesuai filter warnanya masing-masing. Tangkapan gambar dari keempatnya lantas digabungkan untuk membentuk foto hasil akhir.</p>
                            <p>Menurut Microsoft, dengan memisahkan tiap elemen warna ini, bodi perangkat bisa dibuat lebih tipis ketimbang menggunakan kamera konvensional yang biasanya memuat seluruh filter warna dalam satu sensor.</p>
                            <p>
                                <div>
                                    <img src="Main Page/assets/mc1.png" class="img" alt="blog1">
                                </div>
                            </p>
                            <p>Terlepas dari apakah Microsoft akan merealisasikan desain itu atau tidak, satu hal yang masih mengganjal adalah keempat kamera tersebut bakal sangat bergantung pada pemrosesan software untuk menyatukan tangkapan gambarnya.</p>
                            <p>Belum jelas juga bagaimana Microsoft akan mengatasi masalah kualitas apabila menerapkan kamera bawah layar dengan susunan nmacam demikian.</p>
                            <p>Teknologi kamera bawah layar sebenarnya sudah beberapa lama dikembangkan oleh beberapa perusahaan teknologi, baik untuk smartphone atau laptop. Namun, hingga saat ini belum ada yang mengedarkannya di pasaran.</p>
                            <p>Salah satu alasan terbesarnya adalah masih sulitnya menjaga kualitas gambar ketika menanamkan sensor kamera di bawah layar.</p>
                            <p>Dirangkum KompasTekno dari Android Authority, Selasa (8/5/2021), Microsoft memproyeksikan teknologi ini bisa diterapkan di aneka perangkat, mulai dari ponsel, tablet, dan desktop.</p>
                        </div>
                    </div>
                </div>

                <aside class="sidebar">
                <div class="category">
                <h2>Kategori Berita</h2>
                        <ul class="category-list">
                            <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                                <a href="indexEdu.php">Edukasi</a>
                            </li>

                            <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                                <a href="indexFood.php">Makanan</a>
                            </li>

                            <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                                <a href="indexKes.php">Kesehatan</a>
                            </li>

                            <li class="list-items" data-aos="fade-left" data-aos-delay="400">
                                <a href="indexTekn.php">Teknologi</a>
                            </li>

                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                <a href="indexLife.php">Gaya Hidup</a>
                            </li>
                        </ul>
                    </div>
                    <div class="popular-post">
                        <h2>Berita Terpopular</h2>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/ketimun.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span>
                                        <i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021
                                    </span>
                                </div>
                            </div>

                            <div class="post-title">
                                <a href="MainpageLife(1).php">6 Kesalahan Memasak Sayuran yang Mungkin Tak Disadari</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/sayur.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageLife(2).php">6 Kesalahan Memasak Sayuran yang Mungkin Tak Disadari</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/casio.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageLife(3).php">Casio Bikin Jam Tangan G-Shock Versi Paling Tipis, Harganya?</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/dog.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageLife(4).php">Apakah Anjing Punya Perasaan Bersalah?</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/urat.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageLife(5).php">7 Gejala Asam Urat yang Tak Boleh Diabaikan</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
                        <h2>Ikuti Surat Kabar Kami</h2>
                        <form action="email.php" method="POST">
                            <div class="form-element">
                                <input type="text" class="input-element" name="email" placeholder="Email">
                                <button class="btn form-btn" name="submit">Ikuti</button>
                            </div>
                        </form>
                    </div>

                    <div class="popular-tags">
                        <h2>Popular Tags</h2>
                        <div class="tags flex-row">
                            <span class="tag" data-aos="flip-up" data-aos-delay="100">Makanan</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="200">Kesehatan</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="300">Teknologi</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="400">Edukasi</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="500">Gaya Hidup</span>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

        <!-- -----------x---------- Site Content -------------x------------>

    </main>

    <!---------------x------------- Main Site Section ---------------x-------------->


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

    <!-- -------------x------------- Footer --------------------x------------------- -->

    <!-- Jquery Library file -->
    <script src="Main Page/js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="Main Page/js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="Main Page/js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="Main Page/js/main.js"></script>
</body>

</html>
