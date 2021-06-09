<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dibanderol Rp 3 Jutaan, Ini Fitur Unggulan Samsung Galaxy A32 5G</title>

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
            <div class="nav-brand">
                <a href="#"><img src="Homepage/assets/PN full color.png" alt="Logo"></a>
            </div>
            <div class="toggle-collapse">
                <div class="toggle-icons">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div>
                <ul class="nav-items">
                    <li class="nav-link">
                        <a href="#">News Update</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Share The Story</a>
                    </li>
                    <li class="nav-link">
                        <a href="#">Contact Us</a>
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
                                <img src="Main Page/assets/sam.png" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 17, 2021</span>
                                <span>
                                    <a href="ceklogin.php">
                                        <button>
                                                <i class="far fa-heart text-gray"></i>
                                            </button>&nbsp;&nbsp;Like
                                            <?php
                                                include("config.php");
                                                session_start();
                                                $nama_user=$_SESSION['username'];
                                                $page=basename($_SERVER['PHP_SELF']);
                                                
                                                $pgsql=pg_query("SELECT count(nama_halaman) FROM simpan_berita WHERE nama_halaman='$page' AND username='$nama_user'");
                                            
                                                $val = pg_fetch_result($pgsql, 0, 0);
                                                if($val=='0')
                                                {
                                                    $query=pg_query("INSERT INTO simpan_berita(username, nama_halaman) VALUEs('$nama_user', '$page')");
                                                }
                                            ?>
                                    </a>
                                </span>

                            </div>
                        </div>

                        <div class="post-title">
                            <a href="MainpageTekn(6).php">Dibanderol Rp 3 Jutaan, Ini Fitur Unggulan Samsung Galaxy A32 5G</a>
                            <p>Pada Mei lalu, Samsung resmi merilis Galaxy A32 5G di Indonesia. Ponsel tersebut menjadi Galaxy seri A pertama di Tanah Air yang mendukung jaringan 5G.</p>
                            <p>Secara tampilan, Galaxy A32 5G tampak identik dengan Galaxy A32 reguler yang dirilis Maret lalu. Hanya saja ukuran layarnya sedikit lebih luas.</p>
                            <p>Ponsel ini menyasar segmen menengah, khususnya kalangan muda yang gemar membuat konten.</p>
                            <p>"Galaxy A32 5G menjadi salah satu lini produk Samsung dengan inovasi terbaru yang hadir menjawab kebutuhan generasi muda memaksimalkan hobi mereka," kata Ilham Indrawan, Product Marketing Manager Samsung Mobile, Samsung Electronics Indonesia melalui keterangan resmi kepada KompasTekno, Rabu (9/6/2021).</p>
                            <p>"Benar-benar Awesome untuk dibawa berolahraga, bikin konten di TikTok dan Instagram, nonton TV series, bahkan buat upskilling hobi-hobi baru yang lagi tren selama pandemi," imbuh Ilham.</p>
                            <p>Galaxy A32 5G sendiri mengusung layar yang sedikit lebih luas dibandingkan Galaxy A32 reguler. Galaxy A32 5G dibekali layar TFT dengan diagonal 6,5 inci.</p>
                            <p>Layar tersebut juga sudah mendukung resolusi Full HD Plus. Seperti "saudaranya", Galaxy A32 5G juga mengusung desain layar Infinity-V atau memiliki lubang berbentuk huruf "V" yang digunakan sebagai rumah kamera depan 13 MP (f/2.2).</p>
                            <p>Fitur lain yang dibawa ponsel ini di antaranya ialah pemindai sidik jari side mounted, NFC, speaker Dolby Atmos, Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot, Bluetooth 5.0, A2DP, LE, USB Type-C 2.0</p>
                            <p>Ponsel kelas menengah ini memiliki dimensi 164,2 x 76,1 x 9,1 mm dengan bobot 205 gram.</p>
                            <p>"Desain minimalis ini bukan hanya nyaman untuk digenggam dan dibawa ke mana pun, tapi juga dijamin bikin kamu makin kece saat menjalani hobimu," kata Ilham.</p>
                            <p>Galaxy A32 5G dijual dengan harga Rp 3.999.000 di Indonesia. Ponsel ini juga menawarkan sejumlah fitur unggulan pengguna, berikut selengkapnya.</p>
                            <P><b>Kamera</b></P>
                            <p>Untuk spesifikasi kamera belakangnya, Galaxy A32 5G dibekali dengan empat kamera yang terdiri dari kamera utama 48 MP (f/1.8), ultrawide 8 MP (f/2.2), kamera makro 5 MP (f/2.4), dan kamera depth sensor 2 MP (f/2.4).</p>
                            <p>Kamera ultrawide 8 MP disebut mampu menghasilkan foto dengan bidang pandang hingga 123 derajat, sedangkan kamera macro 5 MP ditujukan untuk memotret obyek dari jarak sangat dekat, sekitar 3-5 cm.</p>
                            <p>Ada beberapa fitur kamera yang bisa digunakan, yakni Night Mode, Portrait Mode, Filter Mode dengan AI, dan masih banyak lainnya.</p>
                            <p>
                                <div>
                                    <img src="Main Page/assets/sam1.jpg" class="img" alt="sam1">
                                </div>
                            </p>
                            <p><b>Chipset 7nm</b></p>
                            <p>Di sektor dapur pacu, Galaxy A32 5G "diotaki" chipset Mediatek Dimensity 720 5G dengan CPU Arm Cortex-A76 dengan clock speed hingga 2 GHz, dan Arm Cortex-A55 dengan clock speed yang sama.</p>
                            <p>Chipset ini dibuat dengan fabrikasi 7nm, berbeda dengan Galaxy A32 reguler yang dibekali chipset dengan fabrikasi 12nm.</p>
                            <p>Chipset tersebut akan dipadankan dengan RAM RAM berkapasitas 8 GB dan memori internal 128 GB, yang bisa diekspansi hingga 1 TB dengan microSD.</p>
                            <p><b>Dukungan 5G</b></p>
                            <p>Sesuai dengan namanya, ponsel ini sudah mendukung jaringan generasi kelima (5G). Mengutip halaman resmi Samsung Indonesia, Galaxy A32 5G mendukung band n1, n3, n5, n7, n8, n20, n28, n38, n40, n41, n66, dan n78.</p>
                            <p>Di Indonesia, Galaxy A32 5G hadir dalam dua pilihan warna, yakni Awesome Black dan Awesome White. Galaxy A32 5G akan dijual dengan harga Rp 3.999.000 di Indonesia. Itu berarti, Galaxy A32 5G adalah ponsel 5G Samsung termurah untuk saat ini.</p>
                            <p>Ponsel ini sudah bisa dipesan melalui situs resmi Samsung dan toko resmi Samsung di sejumlah marketplace.</p>
                        </div>
                    </div>
                </div>

                <aside class="sidebar">
                    <div class="category">
                        <h2>Category</h2>
                        <ul class="category-list">
                            <li class="list-items" data-aos="fade-left" data-aos-delay="100">
                                <a href="#">Health</a>

                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="200">
                                <a href="#">Technology</a>

                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="300">
                                <a href="#">Lifestyle</a>

                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="400">
                                <a href="#">Education</a>

                            </li>
                            <li class="list-items" data-aos="fade-left" data-aos-delay="500">
                                <a href="#">Food</a>

                            </li>
                        </ul>
                    </div>
                    <div class="popular-post">
                        <h2>Popular Post</h2>
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
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>

                            <div class="post-title">
                                <a href="MainpageTekn(1).php">Telegram Ajak Pengguna WhatsApp Hapus Aplikasi</a>
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
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageTekn(2).php">Wisata Luar Angkasa Gratis lewat Google Chrome, Begini Caranya</a>
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
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageTekn(3).php">Gojek dan Tokopedia Resmi Merger Menjadi GoTo</a>
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
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageTekn(4).php">WhatsApp Siapkan "Mode Menghilang", Seperti Apa?</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/5G1.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 17,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageTekn(5).php">Layanan 5G Telkomsel Meluncur Sebentar Lagi?</a>
                            </div>
                        </div>
                    </div>
                    <div class="newsletter" data-aos="fade-up" data-aos-delay="300">
                        <h2>Newsletter</h2>
                        <div class="form-element">
                            <input type="text" class="input-element" placeholder="Email">
                            <button class="btn form-btn">Subscribe</button>
                        </div>
                    </div>
                    <div class="popular-tags">
                        <h2>Popular Tags</h2>
                        <div class="tags flex-row">
                            <span class="tag" data-aos="flip-up" data-aos-delay="100">Software</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="200">technology</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="300">travel</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="400">illustration</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="500">design</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="600">lifestyle</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="700">love</span>
                            <span class="tag" data-aos="flip-up" data-aos-delay="800">project</span>
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
                <p>Muhammad Ikhsan Ananda G64190032</p>
                <p>Ramadhanti Nisa Permanahadi G64190092</p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Newsletter</h2>
                <p>Stay update with our latest</p>
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>
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
