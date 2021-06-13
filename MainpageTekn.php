<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bocoran Spesifikasi Redmi Note 10s, Meluncur di Indonesia Besok</title>

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
                                <img src="Main Page/assets/Tekn1redmi.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14, 2019</span>
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
                            <a href="MainpageTekn.php">Bocoran Spesifikasi Redmi Note 10s, Meluncur di Indonesia Besok</a>
                            <p>Melengkapi lini Redmi Note 10 dan Redmi Note 10 Pro yang sudah lebih dulu meluncur di Indonesia, Xiaomi berencana merilis ponsel Redmi Note 10s di Indonesia pada Selasa (18/5/2021) malam.
                            </p>
                            <p>Meski belum dirilis secara resmi, namun sejumlah sumber telah memprediksi spesifikasi dari Redmi Note 10s. Konon, ponsel ini akan memiliki sejumlah perbedaan aspek dari kedua saudaranya.
                            </p>
                            <p>Salah satu di antaranya adalah aspek System-on-Chip (SoC) yang diusung. Berbeda dengan Redmi Note 10 yang ditenagai chip Snapdragon 678, Redmi Note 10s disinyalir bakal diotaki chipset gaming, MediaTek Helio G95.
                            </p>
                            <p>Chipset tersebut akan dipadankan dengan RAM dan dua pilihan penyimpanan, masing-masing 6 GB/64 GB dan 6 GB/128 GB.
                            </p>
                            <p>Selain itu, resolusi kamera pada Redmi Note 10s diprediksi akan jauh lebih baik dibanding Redmi Note 10 "reguler". Redmi Note 10s disebut bakal mengusung kamera utama beresolusi 64 MP, berbeda dengan resolusi kamera Redmi Note
                                10 yang hanya 48 MP.
                            </p>
                            <p>Konfigurasi tiga kamera lainnya diduga serupa dengan Redmi Note 10, yang terdiri dari kamera ultra-wide 8 MP, kamera macro 2 MP, dan kamera depth 2 MP. Di bagian depan, Redmi Note 10s akan dibekali dengan kamera selfie 13 MP.
                            </p>
                            <p>Secara keseluruhan, Redmi Note 10s memiliki dimensi 160,46 x 74,5 x 8,29 mm dengan bobot mencapai 178,8 gram.
                            </p>
                            <p>Layarnya yang mengusung panel Super AMOLED berbentang 6,43 inci Full HD Plus (2.400 x 1.080 piksel). Layar tersebut turut mendukung touch sampling rate 180 Hz, refresh rate 60 Hz dan sudah dilengkapi dengan pelindung Gorilla
                                Glass 3.
                            </p>
                            <p>Redmi Note 10s kabarnya sudah menjalankan sistem operasi Android 11 dengan antarmuka khas Xiaomi, yakni MIUI versi 12.5.
                            </p>
                            <p>Spesifikasi lain dari Redmi Note 10s adalah colokan earphone 3,5 mm, side-mounted fingerprint sensor, Bluetooth 5.0, serta baterai yang berkapasitas 5.000 mAh yang sudah mendukung pengisian daya cepat 33 Watt.
                            </p>
                            <p>Dihimpun KompasTekno dari GizmoChina, Senin (17/5/2021), Redmi Note 10s disebut bakal tersedia dalam tiga varian warna Deep Sea Blue, Frost White, dan Shadow Black.
                            </p>
                            <p>Soal harga, bocoran lain mengatakan jika ponsel ini juga akan dirilis di India dengan banderol harga 14.999 Rupee (sekitar Rp 2,9 juta) untuk versi 6 GB/64 GB dan 15.999 Rupee (sekitar Rp 3,1 juta) untuk versi 6 GB/128 GB.
                                Belum diketahui harga versi Indonesianya.
                            </p>
                            <p>Perlu diperhatikan jika spesifikasi dan harga di atas masih berupa rumor. Untuk mengetahui spesifikasi dan harga pasti Redmi Note 10s di Indonesia, Anda dapat menonton peluncurannya yang disiarkan di kanal YouTube Xiaomi Indonesia
                                pada Selasa, (18/5/2021) pukul 19.30 WIB.
                            </p>
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
                                    <img src="Main Page/assets/Tekn2tele.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span>
                                        <i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 16,
                                        2021
                                    </span>
                                </div>
                            </div>

                            <div class="post-title">
                                <a href="MainpageTekn(1).html">Telegram Ajak Pengguna WhatsApp Hapus Aplikasi</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/Tekn3angk.png" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 16,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageTekn(2).html">Wisata Luar Angkasa Gratis lewat Google Chrome, Begini Caranya</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/goto1.png" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 17,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageTekn(3).html">Gojek dan Tokopedia Resmi Merger Menjadi GoTo</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/wa1.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 18,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageTekn(4).html">WhatsApp Siapkan "Mode Menghilang", Seperti Apa?</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/popular-post/m-blog-5.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 17,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageTekn(5).html">Layanan 5G Telkomsel Meluncur Sebentar Lagi?</a>
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
