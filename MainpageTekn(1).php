<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Telegram Ajak Pengguna WhatsApp Hapus Aplikasi</title>

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
                                <img src="Main Page/assets/Tekn2tele.jpg" class="img" alt="blog1">
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
                            <a href="MainpageTekn(1).php">Telegram Ajak Pengguna WhatsApp Hapus Aplikasi
                            </a>
                            <p>Kebijakan privasi baru WhatsApp soal pembagian data percakapan akun WhatsApp Business dengan Facebook yang berlaku mulai 15 Mei 2021 kemarin, membuat kompetitornya, Telegram "menggila".
                            </p>
                            <p>Dalam sebuah twit, akun resmi Telegram di Twitter mengimbau pengguna untuk menghapus aplikasi WhatsApp.
                            </p>
                            <p>Twit tersebut diawali dengan unggahan gambar ilustrasi "tong sampah" di komputer Windows, alias "Recycle Bin" yang berevolusi dari tahun ke tahun.
                            </p>
                            <p>Di tahun 2021, gambar ikon "recycle" tersebut ternyata diubah oleh Telegram menjadi ikon "WhatsApp". Sementara itu, logo induk aplikasi tersebut, yaitu Facebook justru menjadi "sampah" yang harus dibuang di Recycle Bin tahun
                                ini.
                            </p>
                            <div>
                                <img src="Main Page/assets/telegram1.jpg" class="img" alt="blog1">
                            </div>
                            <p>Telegram tidak mengimbau pengguna untuk beralih ke aplikasi perpesanan buatan Pavel Durov tersebut, lantaran hal itu sepenuhnya merupakan keputusan pengguna. Meski demikian, ajakan untuk menghapus WhatsApp tetap digaungkan.
                            </p>
                            <p>"Sama seperti yang sudah-sudah, pilih layanan perpesanan yang menghormati (privasi) Anda. Dan hapus WhatsApp," tutur Telegram membalas seorang pengguna yang meminta saran.
                            </p>
                            <a href="#">Bikin gerah WhatsApp
                            </a>
                            <p>
                                <div>
                                    <img src="Main Page/assets/telegram3.jpg" class="img" alt="blog1">
                                </div>
                            </p>
                            <p>"Admin Telegram: '... yang orang-orang tidak tahu adalah kami tidak dilindungi dengan sistem keamanan end-to-end encryption secara default,"
                            </p>
                            <p>Maksud WhatsApp di sini mungkin sistem E2E tidak diterapkan di aplikasi perpesanan Telegram secara merata.
                            </p>
                            <p>Sebab, apabila mengacu pada laman FAQ Telegram, sistem keamanan macam ini hanya berlaku di fitur percakapan rahasia alias Secret Chat.
                            </p>
                            <p>Akun Telegram lantas merespons balasan WhatsApp ini dengan mengunggah gambar tangkapan layar (screenshot) pendukung yang menguak bahwa seluruh aktivitas pencadangan (backup) di WhatsApp tidak dilindungi dengan sistem E2E.
                            </p>
                            <p>"Pengguna kami tahu bagaimana sistem (keamanan) kami bekerja dan memiliki aplikasi open source untuk membuktikan hal tersebut," ujar Telegram.
                            </p>
                            <p>"Biarlah gambar tangkapan layar yang berbicara. Gambar screenshot ini membuktikan bahwa Anda (WhatsApp) berbohong," imbuh Telegram.
                            </p>
                            <p>Adapun gambar tangkapan layar yang diunggah Telegram mengklaim bahwa platform backup pihak ketiga, seperti Apple (iCloud), Google (Drive), dan bahkan WhatsApp itu sendiri bisa mengakses data percakapan apabila statusnya sedang
                                di-backup.
                            </p>
                            <p>Tidak dijelaskan apakah pencadangan WhatsApp memang benar tidak terenkripsi secara E2E atau tidak. Sebab WhatsApp tampak bergeming melihat balasan dari Telegram ini.
                            </p>
                            <p>Namun, akun Twitter yang dikenal membagikan berbagai fitur terbaru WhatsApp, WABetaInfo mengatakan bahwa aplikasi perpesanan tersebut tengah menguji coba fitur enkripsi secara E2E untuk sistem backup.
                            </p>
                            <div>
                                <img src="Main Page/assets/telegram2.jpg" class="img" alt="blog1">
                            </div>
                            <p>Belum diketahui kapan fitur ini akan bisa dinikmati pengguna WhatsApp.
                            </p>
                            <p>Yang jelas, menarik melihat WhatsApp dan Telegram berargumen di ruang publik, demi meyakinkan penggunanya, bahwa kedua aplikasi tersebut terbukti memiliki sistem privasi dan keamanan yang kuat.
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
                                    <img src="Main Page/assets/Tekn1redmi.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span>
                                        <i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 16,
                                        2021
                                    </span>
                                </div>
                            </div>

                            <div class="post-title">
                                <a href="MainpageTekn.html">Bocoran Spesifikasi Redmi Note 10s, Meluncur di Indonesia Besok
                                </a>
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
