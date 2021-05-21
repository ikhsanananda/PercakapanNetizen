<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jangan Dibuang, Kulit Pisang Ternyata Bisa Hilangkan Jerawat</title>

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
                                <img src="Main Page/assets/pisang1.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 19, 2021</span>
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
                            <a href="MainpageKes.php">Jangan Dibuang, Kulit Pisang Ternyata Bisa Hilangkan Jerawat</a>
                            <p>Pisang merupakan salah satu buah yang cukup populer di dunia. Tidak hanya rasanya yang nikmat, buah ini juga kaya akan kandungan nutrisinya.
                            </p>
                            <p>Selain buahnya, ternyata kulit pisang juga memiliki segudang manfaat di baliknya.
                            </p>
                            <p>Salah satunya, kulit pisang dapat digunakan untuk menghilangkan jerawat.
                            </p>
                            <p>Meskipun belum ada penelitian yang komprehensif mengenai hubungan antara kulit pisang dan jerawat, beberapa penelitian menunjukkan kandungan dalam kulit pisang yang dapat memerangi jerawat.
                            </p>
                            <p>Sebuah publikasi berjudul “Anti-inflammatory effects of lutein in retinal ischemic/hypoxic injury: in vivo and in vitro studies” menunjukkan bahwa kulit pisang mengandung lutein, antioksidan, dan vitamin karotenoid.
                            </p>
                            <p>Zat ini dapat membantu melindungi kulit dari kerusakan yang disebabkan oleh matahari.
                            </p>
                            <p>Kulit pisang juga kaya akan asam lemak esterifikasi yang membantu mengobati masalah kulit, termasuk jerawat.
                            </p>
                            <p>Studi lain berjudul “Anti-inflammatory and Antioxidant Activities of Extracts from Musa sapientum Peel” menunjukkan bahwa kulit pisang memiliki sifat anti-inflamasi.
                            </p>
                            <p>Kandungan ini dapat membantu mengurangi peradangan.
                            </p>
                            <p>Selain itu, dikutip dari Prevent Disease dan Style Craze, kulit pisang mengandung vitamin A, B, C, E, kalium, mangan, seng, dan zat besi yang dapat membantu memudarkan bekas jerawat.
                            </p>
                            <p>Kandungan seng atau zinc yang terdapat di dalamnya dapat memerangi jerawat.
                            </p>
                            <p>Merangkum dari WikiHow, berikut ini cara mengatasi jerawat menggunakan kulit pisang.
                            </p>
                            <a>1. Bersihkan wajah</a>
                            <p>Sebelum menggunakan kulit pisang, pastikan bahwa kulit bebas dari kotoran dan minyak.
                            </p>
                            <p>Gunakan pembersih ringan, lalu bilas dengan air sampai bersih.
                            </p>
                            <p>Tepuk-tepuk kulit hingga kering dengan handuk bersih yang lembut.
                            </p>
                            <p>Jangan menggosok terlalu keras karena akan menyebabkan peradangan dan memperburuk jerawat.
                            </p>
                            <a>2. Memilih pisang
                            </a>
                            <p>Pilih pisang yang sudah matang, yakni yang berwarna kuning dengan bintik-bintik hitam.
                            </p>
                            <p>Jangan menggunakan pisang yang kurang matang (berwarna kuning cerah dengan ujung hijau) atau terlalu matang (berminyak dan berwarna hitam).</p>
                            <p>Menggunakan pisang yang sudah matang dapat memudahkan dalam mengusap area yang berjerawat.</p>
                            <a>3. Siapkan kulitnya</a>
                            <p>Potong-potong kulit pisang sesuai kebutuhan.</p>
                            <p>Kemudian gosokkan secara lembut kulit pisang ke area wajah yang berjerawat selama sekitar 10 menit.</p>
                            <p>Setiap beberapa menit, periksa kondisi kulit pisang.</p>
                            <p>Apabila sudah menghitam, ganti dengan potongan yang lain dan lanjut gosokkan ke arena wajah.</p>
                            <p>Nutrisi yang terkandung dalam kulit pisang dapat menenangkan kulit yang meradang dan mengurangi munculnya jerawat.</p>
                            <a>4. Biarkan kulit beristirahat</a>
                            <p>Jangan langsung membasuh wajah setelah selesai menggosoknya dengan kulit pisang.</p>
                            <p>Istirahatkan wajah selama beberapa saat agar nutrisi kulit pisang benar-benar terserap.</p>
                            <p>Disarankan untuk melakukan perawatan ini pada malam hari, sebelum tidur dan biarkan sampai pagi.</p>
                            <p>Kemudian, bilas dengan air sampai bersih pada pagi harinya.</p>
                            <p>Lakukan perawatan ini secara rutin untuk mendapatkan hasil maksimal.</p>
                            <p>Selamat mencoba!</p>

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
                                <a href="#">Shopping</a>

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
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 19,
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