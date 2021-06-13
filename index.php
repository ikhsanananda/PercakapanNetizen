<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Percakapan Netizen</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="Homepage/css/all.css">
    <link rel="stylesheet" href="Homepage/css/fonts.css">

    <!-- --------- Owl-Carousel ------------------->
    <link rel="stylesheet" href="Homepage/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Homepage/css/owl.theme.default.min.css">

    <!-- ------------ AOS Library ------------------------- -->
    <link rel="stylesheet" href="Homepage/css/aos.css">

    <!-- Custom Style   -->
    <link rel="stylesheet" href="Homepage/css/Style.css">

</head>

<body>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="/__/firebase/8.4.1/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use 
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="/__/firebase/8.4.1/firebase-analytics.js"></script>

    <!-- Initialize Firebase -->
    <script src="/__/firebase/init.js"></script>

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
        <!------------------------ Site Title ---------------------->
        <section class="site-title">
            <div class="site-background" data-aos="fade-up" data-aos-delay="100">
                <h3>Berita Terkini</h3>
                <h1>Menginspirasi Melalui Informasi</h1>
                <a href="ceklogin.php"><button class="btn">Berita Favorit Anda</button></a>
            </div>
        </section>

        <!------------x----------- Site Title ----------x----------->

        <!-- --------------------- Blog Carousel ----------------- -->

        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="Main Page/assets/Tekn1redmi.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Bocoran Spesifikasi Redmi Note 10s, Meluncur di Indonesia Besok</h3>
                                <a href="MainpageTekn.php"><button class="btn btn-blog">Baca</button></a>
                                
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="Main Page/assets/sepatu.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Midsole 3D Printing pada Sepatu Lari Terbaru Adidas, Apa Istimewanya?</h3>
                                <a href="MainpageLife.php"><button class="btn btn-blog">Baca</button></a>
                                
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="Main Page/assets/pisang1.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Jangan Dibuang, Kulit Pisang Ternyata Bisa Hilangkan Jerawat</h3>
                                <a href="MainpageKes.php"><button class="btn btn-blog">Baca</button></a>
                                
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="Main Page/assets/pempek.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>4 Jenis Ikan untuk Pempek, Tidak Cuma Ikan Tenggiri</h3>
                                <a href="MainpageFood.php"><button class="btn btn-blog">Baca</button></a>
                                
                            </div>
                        </div>
                    </div>
                    <div class="owl-navigation">
                        <span class="owl-nav-prev"><i class="fas fa-long-arrow-alt-left"></i></span>
                        <span class="owl-nav-next"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>
            </div>
        </section>

        <!-- ----------x---------- Blog Carousel --------x-------- -->

        <!-- ---------------------- Site Content -------------------------->

        <section class="container">
            <div class="site-content">
                <div class="posts">
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="Main Page/assets/oo.jpeg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14, 2019</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="MainpageEdu.php">17 Siswa Indonesia Siap Unjuk Kemampuan di Olimpiade Informatika Asia-Pasifik 2021</a>
                            <p>
                                Sebanyak tujuh belas siswa SMA dari beberapa provinsi menjadi wakil Indonesia dalam ajang Olimpiade Informatika Asia-Pasifik atau Asia Pacific Informatics Olympiad (APIO) yang berlangsung secara daring tanggal 21-26 Mei 2021.
                            </p>
                            <a href="MainpageEdu.php"><button class="btn post-btn">Baca &nbsp; <i class="fas fa-arrow-right"></i></button></a>
                        </div>
                    </div>
                    <hr>

                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="Main Page/assets/Tekn2tele.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 16, 2019</span>
                                
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="MainpageTekn(1).php"> Telegram Ajak Pengguna WhatsApp Hapus Aplikasi</a>
                            <p>Kebijakan privasi baru WhatsApp soal pembagian data percakapan akun WhatsApp Business dengan Facebook yang berlaku mulai 15 Mei 2021 kemarin, membuat kompetitornya, Telegram "menggila".
                            </p>
                            <a href="MainpageTekn(1).php"><button class="btn post-btn">Baca &nbsp; <i class="fas fa-arrow-right"></i></button></a>
                        </div>
                    </div>
                    <hr>
                    
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="Main Page/assets/ketimun.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 19, 2019</span>
                                
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="MainpageLife(1).php">5 Manfaat Luar Biasa dari Kebiasaan Makan Mentimun</a>
                            <p>Siapa yang tak kenal dengan ketimun? Dalam banyak menu makanan yang kita santap, ketimun atau mentimun kerap hadir menghiasi "hidangan".
                            </p>
                            <a href="MainpageLife(1).php"><button class="btn post-btn">Baca &nbsp; <i class="fas fa-arrow-right"></i></button></a>
                        </div>
                    </div>
                    <hr>

                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="Main Page/assets/garlic.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 21, 2019</span>
                                
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="MainpageKes(1).php"> 6 Manfaat Black Garlic bagi Kesehatan</a>
                            <p>Black garlic atau bawang putih hitam mungkin masih asing terdengar di telinga sebagian besar masyarakat Indonesia. 
                            </p>
                            <a href="MainpageKes(1).php"><button class="btn post-btn">Baca &nbsp; <i class="fas fa-arrow-right"></i></button></a>
                        </div>
                    </div>

                    <div class="pagination flex-row">
                        <a href="index.php" class="pages">1</a>
                        <a href="index2.php" class="pages">2</a>
                        <a href="index3.php" class="pages">3</a>
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
                                    <img src="Main Page/assets/bakwan.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                        2019</span>
                                        
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageFood(1).php">Cara Goreng Bakwan yang Benar agar Tidak Lembek dan Serap Minyak</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/kucing.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                        2019
                                    </span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageEdu(1).php">Pakar IPB Beberkan Alasan Tidak Ada Kucing Belang Tiga Jantan</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/Tekn3angk.png" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                        2019</span>
                                    
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageTekn(2).php">Wisata Luar Angkasa Gratis lewat Google Chrome, Begini Caranya</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/sayur.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageLife(2).php">6 Kesalahan Memasak Sayuran yang Mungkin Tak Disadari</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/kurus.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;January 14,
                                        2019</span>
                                    
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageKes(2).php">Badan Kurus Tapi Double Chin, Kenali Penyebabnya</a>
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
                            <span class="tag" data-aos="flip-up" data-aos-delay="500">gayahidup</span>
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
    <script src="Homepage/js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="Homepage/js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="Homepage/js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="Homepage/js/main.js"></script>
</body>

</html>
