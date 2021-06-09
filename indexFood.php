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
            <div class="nav-brand">
                <a href="indexFood.php"><img src="Homepage/assets/PN full color.png" alt="Logo"></a>
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
                <a href="SignupLogin.php"><button class="btn">Berita Favorit Anda</button></a>
            </div>
        </section>

        <!------------x----------- Site Title ----------x----------->

        <!-- --------------------- Blog Carousel ----------------- -->

        <section>
            <div class="blog">
                <div class="container">
                    <div class="owl-carousel owl-theme blog-post">
                        <div class="blog-content" data-aos="fade-right" data-aos-delay="200">
                            <img src="Main Page/assets/pempek.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>4 Jenis Ikan untuk Pempek, Tidak Cuma Ikan Tenggiri</h3>
                                <a href="MainpageFood.php"><button class="btn btn-blog">Baca</button></a>
                                
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-in" data-aos-delay="200">
                            <img src="Main Page/assets/plepah.png" alt="post-1">
                            <div class="blog-title">
                                <h3>Mengenal Plepah, Komunitas yang Kembangkan Wadah Makanan Ramah Lingkungan</h3>
                                <a href="MainpageFood(6).php"><button class="btn btn-blog">Baca</button></a>
                                
                            </div>
                        </div>
                        <div class="blog-content" data-aos="fade-left" data-aos-delay="200">
                            <img src="Main Page/assets/ayam.jpg" alt="post-1">
                            <div class="blog-title">
                                <h3>Nikmatnya Ayam Cipera, Makanan Khas Karo yang Mudah Masaknya</h3>
                                <a href="MainpageFood(11).php"><button class="btn btn-blog">Baca</button></a>
                                
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
                                <img src="Main Page/assets/serai.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 17, 2021</span>
                        
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="MainpageFood(7).php">Cara Gunakan Serai untuk Masakan, Memarkan Dulu</a>
                            <p>Serai sering digunakan untuk membumbui masakan seperti soto dan gulai. Penggunaan serai pada masakan, dapat membuat hidangan lebih harum dan sedap.</p>
                            <a href="MainpageFood(7).php"><button class="btn post-btn">Baca &nbsp; <i class="fas fa-arrow-right"></i></button></a>
                        </div>
                    </div>
                    <hr>

                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="Main Page/assets/iga.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 17, 2021</span>
                                
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="MainpageFood(8).php">3 Tips Pisahkan Daging Iga Kambing dari Tulangnya</a>
                            <p>Salah satu bagian kambing yang mudah untuk diolah adalah bagian iganya. Iga kambing bisa dimasak dalam waktu yang cepat karena mudah empuk.</p>
                            <a href="MainpageFood(8).php"><button class="btn post-btn">Baca &nbsp; <i class="fas fa-arrow-right"></i></button></a>
                        </div>
                    </div>
                    <hr>
                    
                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="Main Page/assets/gomak.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 17, 2021</span>
                                
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="MainpageFood(9).php">Resep Mie Gomak Kuah Khas Batak untuk Sarapan</a>
                            <p>Mi gomak adalah masakan khas Batak berupa mi lidi rebus berkuah santan bumbu kuning. Mi gomak biasanya disantap saat sarapan.</p>
                            <a href="MainpageFood(9).php"><button class="btn post-btn">Baca &nbsp; <i class="fas fa-arrow-right"></i></button></a>
                        </div>
                    </div>
                    <hr>

                    <div class="post-content" data-aos="zoom-in" data-aos-delay="200">
                        <div class="post-image">
                            <div>
                                <img src="Main Page/assets/poached.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 17, 2021</span>
                                
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="MainpageFood(10).php">Tips Masak Poached Egg agar Tidak Hancur, Pakai Cuka</a>
                            <p>Poached egg merupakan telur yang direbus tanpa cangkang. Sering juga disebut telur ceplok rebus atau telur apung.</p>
                            <a href="MainpageFood(10).php"><button class="btn post-btn">Baca &nbsp; <i class="fas fa-arrow-right"></i></button></a>
                        </div>
                    </div>
                </div>

                <aside class="sidebar">
                    <div class="category">
                        <h2>Kategori Berita</h2>
                        <ul class="category-list">
                            <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                                <a href="edukasi.php">Edukasi</a>
                            </li>

                            <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                                <a href="makanan.php">Makanan</a>
                            </li>

                            <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                                <a href="kesehatan.php">Kesehatan</a>
                            </li>

                            <li class="list-items" data-aos="fade-left" data-aos-delay="400">
                                <a href="teknologi.php">Teknologi</a>
                            </li>

                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                <a href="gayahidup.php">Gaya Hidup</a>
                            </li>
                        </ul>
                    </div>

                    <div class="popular-post">
                        <h2>Popular Post</h2>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="200">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/kucing.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span>
                                        <i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 16,
                                        2021
                                    </span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>

                            <div class="post-title">
                                <a href="MainpageEdu(1).php">Pakar IPB Beberkan Alasan Tidak Ada Kucing Belang Tiga Jantan</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/bca.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 19,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageEdu(2).php">BCA Buka Beasiswa 2022 Lulusan SMA/SMK, Kuliah Gratis dan Uang Saku</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/nanggala.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 20,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageEdu(3).php">ITS Serahkan Ijazah Mahasiswa yang Gugur di KRI Nanggala-402</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/pln.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageEdu(4).php">Institut Teknologi PLN Buka Jalur Seleksi D3-S1 Gunakan Nilai Rapor</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/was.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 17,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageEdu(5).php">Agar WhatsApp Tak Habiskan Memori HP ala Institut Teknologi Batam</a>
                            </div>
                        </div>
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