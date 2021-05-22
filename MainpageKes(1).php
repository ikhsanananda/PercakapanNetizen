<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>6 Manfaat Black Garlic bagi Kesehatan</title>

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
                <a href="#" class="text-gray">RPL News</a>
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
            <div class="social text-gray">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
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
                                <img src="Main Page/assets/garlic.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 18, 2021</span>
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
                            <a href="MainpageKes(1).php">6 Manfaat Black Garlic bagi Kesehatan</a>
                            <p>Black garlic atau bawang putih hitam mungkin masih asing terdengar di telinga sebagian besar masyarakat Indonesia. 
                            </p>
                            <p>Namun, bahan makanan ini telah dikonsumsi oleh masyarakat Korea Selatan , Jepang, dan Thailand selama berabad-abad.
                            </p>
                            <p>Hal ini disebabkan oleh segundang manfaat yang dikandung black garlic bagi tubuh.
                            </p>
                            <p>Lalu apa itu black garlic?
                            </p>
                            <p>Dilansir dari penelitian berjudul “Black garlic: A critical review of its production, bioactivity, and application”, black garlic adalah bawang putih biasa yang telah difermentasikan dalam waktu tertentu dengan suhu tinggi dan terkontrol kelembapannya.
                            </p>
                            <p>Proses ini menjadikan bawang putih menjadi berwarna hitam, lebih manis, dan memiliki konsistensi kenyal.
                            </p>
                            <p>Di samping perubahan rasa dan tekstur, proses fermentasi yang telah dilakukan juga memberikan sejumlah manfaat tambahan, berikut ini di antaranya.
                            </p>
                            <a>1. Memiliki kandungan antioksidan lebih banyak</a>
                            <p>Black garlic memiliki kandungan antioksidan yang lebih tinggi daripada bawang putih biasa.
                            </p>
                            <p>Hal ini disebabkan, kandungan allicin dalam bawang putih diubah menjadi senyawa antioksidan, yakni alkaloid dan flavonoid selama proses fermentasi.
                            </p>
                            <p>Antioksidan adalah senyawa yang membantu melindungi sel dari kerusakan oksidatif, yakni kerusakan yang dapat menyebabkan berbagai penyakit kronis, seperti kanker, jantung, dan lain sebagainya.
                            </p>
                            <a>2. Dapat mengatur gula darah</a>
                            <p>Selain dapat mencegah kerusakan oksidatif, black garlic juga dapat mengatur gula dalam darah.
                            </p>
                            <p>Penelitian berjudul “Antioxidant mechanism of black garlic extract involving nuclear factor erythroid 2-like factor 2 pathway” para peneliti memberikan makan tikus asupan makanan tinggi gula dan lemak.
                            </p>
                            <p>Setelah diberi black garlic, kadar gula darah dalam tikus menurun.
                            </p>
                            <p>Selain itu, penelitian lain berjudul “Lactobacillus bulgaricus improves antioxidant capacity of black garlic in the prevention of gestational diabetes mellitus: a randomized control trial” menunjukkan bahwa black garlic yang difermentasi menggunakan bakteri Lactobacillus bulgaricus dapat membantu mencegah perkembangan diabetes gestasional, yakni gejala diabetes yang dialami oleh perempuan hamil.
                            </p>
                            <a>3. Mengurangi risiko penyakit jantung
                            </a>
                            <p>Penelitian berjudul “Fermented garlic protects diabetic, obese mice when fed a high-fat diet by antioxidant effects” telah menunjukkan bahwa black garlic dapat mengurangi kadar kolesterol LDL (jahat) dan trigliserida dalam darah.
                            </p>
                            <p>Selain itu, penelitian tersebut juga menunjukkan bahwa black garlic dapat meningkatkan kolesterol HDL (baik).
                            </p>
                            <a>4. Melindungi otak</a>
                            <p>Black garlic juga dapat membantu mencegah peradangan yang dapat mengganggu daya ingat dan memperburuk fungsi otak secara berkala.
                            </p>
                            <p>Dalam publikasi berjudul “β-Amyloid peptides and amyloid plaques in Alzheimer's disease” ilmuwan mengatakan bahwa akumulasi senyawa protein yang disebut beta amyloid menyebabkan peradangan di otak dan dapat meningkatkan risiko penyakit Alzheimer.
                            </p>
                            <p>Satu penelitian terhadap tikus berjudul “Neuroprotective Effects of Aged Garlic Extract on Cognitive Dysfunction and Neuroinflammation Induced by β-Amyloid in Rats” menemukan bahwa black garlic dapat mengurangi peradangan otak yang disebabkan oleh beta amiloid dan meningkatkan daya ingat jangka pendek.
                            </p>
                            <a>5. Memiliki senyawa antikanker
                            </a>
                            <p>Beberapa penelitian menunjukkan efek positif black garlic dalam melawan sel kanker.
                            </p>
                            <p>Studi berjudul “Individual differences on immunostimulatory activity of raw and black garlic extract in human primary immune cells” menunjukkan aktivitas stimulasi kekebalan, antioksidan, dan antikanker yang lebih kuat pada ekstrak black garlic daripada ekstrak bawang putih biasa.
                            </p>
                            <p>Dalam studi tersebut terlihat bahwa ekstrak black garlic dapat melawan sel-sel kanker paru-paru, payudara, perut, dan hati dalam waktu 72 jam.
                            </p>
                            <a>6. Memelihara kesehatan hati
                            </a>
                            <p>Black garlic dapat membantu melindungi hati dari kerusakan yang disebabkan oleh paparan bahan kimia, obat-obatan, alkohol, dan kuman secara terus-menerus.
                            </p>
                            <p>Penelitian terhadap tikus berjudul “Hepatoprotective effect of aged black garlic extract in rodents” menemukan bahwa black garlic memberikan efek perlindungan terhadap kerusakan hati dan mencegah kerusakan hati lebih lanjut.
                            </p>
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
                                    <img src="Main Page/assets/garlic.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span>
                                        <i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 18,
                                        2021
                                    </span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>

                            <div class="post-title">
                                <a href="MainpageKes(1).php">6 Manfaat Black Garlic bagi Kesehatan</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/kurus.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 19,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageKes(2).php">Badan Kurus Tapi Double Chin, Kenali Penyebabnya</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/sepsis.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 20,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageKes(3).php">6 Bahaya Sepsis yang Perlu Diwaspadai</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/sendi.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 1,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageKes(4).php">5 Makanan yang Pantang bagi Penderita Nyeri Sendi</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/asma.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 17,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageKes(5).php">Apakah Penderita Asma Rentan Terinfeksi Covid-19?</a>
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
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium quia atque nemo ad modi officiis iure, autem nulla tenetur repellendus.</p>
            </div>
            <div class="newsletter" data-aos="fade-right" data-aos-delay="200">
                <h2>Newsletter</h2>
                <p>Stay update with our latest</p>
                <div class="form-element">
                    <input type="text" placeholder="Email"><span><i class="fas fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="instagram" data-aos="fade-left" data-aos-delay="200">
                <h2>Instagram</h2>
                <div class="flex-row">
                    <img src="Main Page/assets/instagram/thumb-card3.png" alt="insta1">
                    <img src="Main Page/assets/instagram/thumb-card4.png" alt="insta2">
                    <img src="Main Page/assets/instagram/thumb-card5.png" alt="insta3">
                </div>
                <div class="flex-row">
                    <img src="Main Page/assets/instagram/thumb-card6.png" alt="insta4">
                    <img src="Main Page/assets/instagram/thumb-card7.png" alt="insta5">
                    <img src="Main Page/assets/instagram/thumb-card8.png" alt="insta6">
                </div>
            </div>
            <div class="follow" data-aos="fade-left" data-aos-delay="200">
                <h2>Follow us</h2>
                <p>Let us be Social</p>
                <div>
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
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
