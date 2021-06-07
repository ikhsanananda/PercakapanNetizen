<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>5 Cara Membuat Martabak Manis Berpori yang Lembut ala Penjual</title>

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
                                <img src="Main Page/assets/martabak.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 22, 2021</span>
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
                            <a href="MainpageFood(4).php">5 Cara Membuat Martabak Manis Berpori yang Lembut ala Penjual</a>
                            <p>Martabak manis atau juga disebut terang bulan merupakan camilan yang banyak dijual di malam hari.</p>
                            <p>Kudapan malam ini biasanya ditambahkan dengan aneka topping seperti parutan keju, meses, remahan kacang, hingga wijen.</p>
                            <p>Namun, seiring dengan berjalannya waktu, ada banyak variasi topping martabak manis yang kekinian seperti selai biskuit Lotus Biscoff.</p>
                            <p>Cara membuat martabak manis di rumah terbilang mudah. Bahan yang digunakan juga mudah didapat.</p>
                            <p>Dilansir dari buku “Resep Favorit untuk Usaha Martabak Mini Manis Gurih” (2013) oleh Ide Masak terbitan PT Gramedia Pustaka Utama, berikut lima cara membuat martabak manis bersarang yang lembut.</p>
                            <a>1. Diamkan adonan selama 60 menit</a>
                            <p>
                                <div>
                                    <img src="Main Page/assets/martabak1.jpg" class="img" alt="blog1">
                                </div>
                            </p>
                            <p>Bahan membuat adonan dasar martabak manis adalah tepung terigu, gula pasir, ragi, garam, telur, margarin, vanili, telur, baking powder, dan air.</p>
                            <p>Campurkan semua bahan tersebut secara bertahan hingga tercampur rata.</p>
                            <p>Kamu bisa menggunakan mixer untuk mempercepat pengocokan adonan. Kocok selama 5 menit. Setelah itu, diamkan adonan selama 60 menit.</p>
                            <p>Mendiamkan adonan dengan jangka waktu tersebut merupakan cara membuat martabak manis mengembang, berserat, dan bersarang. Setelah itu, adonan siap untuk digunakan.</p>
                            <a>2. Jangan sampai spatula meyentuh dasar wajan</a>
                            <p>Gunakan sendok sayur atau spatula untuk meratakan adonan martabak manis.</p>
                            <p>Saat adonan sudah dituang di atas teflon dan tinggal diratakan, jangan sampai spatula menyentuh dasar wajan. Hal itu bisa membuat adonan kue berlubang dan memengaruhi hasil tampilannya nanti.</p>
                            <a>3. Gunakan santan atau susu cair</a>
                            <p>
                                <div>
                                    <img src="Main Page/assets/martabak2.jpg" class="img" alt="blog1">
                                </div>
                            </p>
                            <p>Air sering kali ditambahkan pada adonan martabak manis untuk mencampurkan tepung dan bahan lainnya.</p>
                            <p>Namun, kamu bisa mengganti air dengan santan atau susu cair agar rasa dari kulit martabak manis lebih gurih.</p>
                            <a>4. Gunakan soda kue</a>
                            <p>Ditambahkan dalam buku “Aneka Resep dan Kiat Usaha Martabak" (2013) oleh Yuyun Alamsyah terbitan PT Gramedia Pustaka Utama yang juga memberikan tips membuat martabak manis agar tidak bantat.</p>
                            <P>Tipsnya adalah dengan menambahkan soda kue pada adonan kulit.</P>
                            <p>Soda kue memiliki fungsi sebagai pengembang adonan.</p>
                            <p>Soda kue bekerja dengan baik dalam adonan yang asam, yang mana bisa membentuk tektur berongga dan tidak beremah pada kulit martabak manis.</p>
                            <p>Tambahkan soda kue di akhir sebelum martabak manis dicetak.</p>
                            <a>5. Oleskan margarin dalam kondisi panas</a>
                            <p>
                                <div>
                                    <img src="Main Page/assets/martabak3.jpg" class="img" alt="blog1">
                                </div>
                            </p>
                            <p>Cara membuat martabak manis yang enak selanjutnya adalah dengan mengoleskan margarin atau mentega di seluruh permukaan kulit martabak saat masih panas.</p>
                            <p>Hal itu agar margarin meresap sampai ke dalam martabak lewat pori-pori yang terbuka lebar dan membuat cita rasa martabak manis jadi lebih enak.
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
                                    <img src="Main Page/assets/bakwan.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span>
                                        <i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021
                                    </span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>

                            <div class="post-title">
                                <a href="MainpageFood(1).php">Cara Goreng Bakwan yang Benar agar Tidak Lembek dan Serap Minyak</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/gorpis.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 20,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageFood(2).php">5 Cara Membuat Pisang Goreng agar Renyah Tahan Lama dan Tidak Keras</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/warkop.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageFood(3).php">Kedai Kopi Tempati Rumah Adat Usia 200 Tahun, Ada di Pematang Siantar</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/martabak.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 22,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageFood(4).php">5 Cara Membuat Martabak Manis Berpori yang Lembut ala Penjual</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/mie.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageFood(5).php">Resep Mie Jawa Godog, Hidangan Berkuah untuk Makan Malam</a>
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
