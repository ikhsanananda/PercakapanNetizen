<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mengenal Jenis Gigitan Tungau dan Cara Mengatasinya</title>

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
                                <img src="Main Page/assets/tungau.jpg" class="img" alt="blog1">
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
                            <a href="MainpageKes(7).php">Mengenal Jenis Gigitan Tungau dan Cara Mengatasinya</a>
                            <p>Tungau merupakan organisme yang termasuk dalam keluarga arthropoda.</p>
                            <p>Mereka masih berhubungan dengan kutu dan menyerupai serangga, tetapi mereka tidak memiliki sayap dan mata.</p>
                            <p>Melansir Healthline, mereka juga cukup kecil, yakni berukuran 0,5 - 2 milimeter, sehingga membuat mereka sulit untuk diidentifikasi.</p>
                            <p>Akibatnya, banyak orang tidak menyadari bahwa mereka telah terpapar tungau sampai mereka merasakan ada benjolan seperti gigitan kecil di tubuhnya.</p>
                            <p>Gigitan tungau biasanya tidak berbahaya meskipun terkadang dapat menyebabkan pembengkakan, gatal, dan nyeri.</p>
                            <p>Ada beberapa tanda yang terlihat ketika seseorang digigit oleh tungau, yakni sebagai berikut.</p>
                            <p>
                                <ul>
                                    <li>tanda merah seperti ruam di kulit</li>
                                    <li>benjolan kecil yang bisa menjadi keras atau meradang</li>
                                    <li>iritasi, gatal, dan nyeri di dekat tanda, ruam, atau benjolan</li>
                                    <li>kulit bengkak atau melepuh di dekat gigitan</li>
                                </ul>
                            </p>
                            <p>Meski demikian, hanya beberapa jenis tungau saja yang menggigit manusia, berikut ini beberapa di antaranya.</p>
                            <a>Chigger</a>
                            <p>Chigger hidup di luar di celah-celah di tanah, umumnya di daerah pedesaan yang lembap dengan rumput tinggi dan pertumbuhan vegetasi yang berlebihan.</p>
                            <p>Hanya larva chigger yang menggigit manusia.</p>
                            <p>Mereka memberi makan dengan menyuntikkan air liur yang melarutkan kulit dan mengisap produk ini kembali.</p>
                            <p>Jika mereka tidak dikeluarkan, mereka mungkin terus makan selama beberapa hari.</p>
                            <p>Beberapa tempat yang biasa digigit chigger antara lain:</p>
                            <p>
                                <ul>
                                    <li>pinggang</li>
                                    <li>ketiak</li>
                                    <li>pergelangan kaki</li>
                                </ul>
                            </p>
                            <p>Gigitannya membentuk bekas merah dalam sehari, dan bekas ini akhirnya mengeras dan meradang.</p>
                            <p>Gigitan chigger sering kali sangat gatal, tetapi cobalah untuk tidak menggaruk karena dapat menyebabkan infeksi dan demam.</p>
                            <p><b>Kudis</b></p>
                            <p>Tungau kudis membutuhkan inang manusia atau hewan untuk hidup. Mereka menggali ke dalam kulit untuk bertelur.</p>
                            <p>Mereka sangat menular dan dapat dengan mudah berpindah ke orang lain.</p>
                            <p>Ketika digigit kudis, seseorang mungkin tidak mengalami gejala apa pun selama beberapa minggu, tetapi pada akhirnya, di tubuhnya ada benjolan dan lepuh seperti ruam.</p>
                            <p>Gejala ini akan berkembang di sepanjang lipatan kulit di bawah ini.</p>
                            <p>
                                <ul>
                                    <li>di antara jari-jarimu</li>
                                    <li>di tekuk lutut dan siku elbow</li>
                                    <li>di sekitar pinggang, payudara, atau bokong</li>
                                    <li>sekitar alat kelamin pria</li>
                                    <li>di bagian bawah kaki, terutama pada anak-anak</li>
                                </ul>
                            </p>
                            <p>Gatal yang terkait dengan kudis sering kali parah dan bisa memburuk pada malam hari.</p>
                            <p>Kudis memerlukan perawatan medis, jadi penting untuk menindaklanjuti dengan penyedia layanan kesehatan.</p>
                            <p><b>Demodex</b></p>
                            <p>Ada dua jenis tungau Demodex, yakni Demodex folliculorum dan Demodex brevis.</p>
                            <p>Demodex atau tungau folikel rambut, umumnya hidup di folikel rambut di wajah.</p>
                            <p>Sementara itu, Demodex brevis lebih sering hidup di leher atau dada.</p>
                            <p>Seseorang tidak dapat melihat tungau ini tanpa mikroskop dan sering kali tidak menimbulkan gejala.</p>
                            <p>Namun, bagi sebagian orang, mereka dapat menyebabkan beberapa tanda berikut.</p>
                            <p>
                                <ul>
                                    <li>kulit gatal atau bersisik</li>
                                    <li>kemerahan</li>
                                    <li>peningkatan sensitivitas kulit</li>
                                    <li>sensasi terbakar</li>
                                    <li>kulit yang terasa kasar seperti amplas</li>
                                </ul>
                            </p>
                            <p><b>Tungau burung dan hewan pengerat</b></p>
                            <p>Tungau hewan pengerat dan burung biasanya hidup di sarang dan di inang hewan.</p>
                            <p>Namun, jika inang mereka mati atau meninggalkan sarang, mereka mungkin juga menggigit manusia.</p>
                            <p>Seseorang mungkin merasakan sengatan kecil ketika mereka digigit dan akhirnya menyadari timbul beberapa gejala berikut.</p>
                            <p>
                                <ul>
                                    <li>rasa sakit</li>
                                    <li>gatal luar biasa</li>
                                    <li>ruam</li>
                                    <li>pembengkakan</li>
                                    <li>iritasi kulit</li>
                                </ul>
                            </p>
                            <p><b>Tungau ek</b></p>
                            <p>Tungau ini biasanya memakan lalat kecil yang hidup di daun ek, tetapi mereka dapat jatuh dari pohon dan menggigit manusia.</p>
                            <p>Di negara subtropis, tungau ini paling sering menyerang di akhir musim panas.</p>
                            <p>Daun pohon ek dengan tepi coklat berkerak dapat menunjukkan tungau ek.</p>
                            <p>Gigitan tungau ek meninggalkan bekas merah, biasanya di wajah, leher, atau lengan.</p>
                            <p>Bekas luka ini sering disalahartikan sebagai gigitan chigger.</p>
                            <p>Dalam 12 jam atau lebih, gigitannya berubah menjadi benjolan yang terlihat seperti jerawat dan sangat gatal.</p>
                            <p>Selain itu, seseorang mungkin memiliki beberapa benjolan yang membentuk ruam yang menyakitkan.</p>
                            <p>Gigitan ini bisa berlangsung selama dua minggu.</p>
                            <p><b>Tungau gatal jerami</b></p>
                            <p>Tungau ini hidup di biji-bijian, jerami, atau biji-bijian yang disimpan, serta pohon dan daun.</p>
                            <p>Mereka biasanya memangsa serangga tetapi juga akan menggigit manusia.</p>
                            <p>Namun, mereka tidak tetap berada di tubuh manusia setelah menggigit.</p>
                            <p>Seseorang biasanya akan menemukan tungau ini jika ia duduk atau berjalan di bawah pohon tempat mereka tinggal atau berbaring di tumpukan daun.</p>
                            <p>Mereka biasanya menggigit bahu dan leher, lalu meninggalkan bekas merah yang gatal dan mungkin tampak seperti ruam.</p>
                            <a>Cara mengatasi gigitan tungau</a>
                            <p>Jika seseorang digigit tungau, ada baiknya ia mandi dan menggunakan banyak sabun.</p>
                            <p>Kemudian, cuci pakaian dan tempat tidur yang terkena dengan air sabun yang hangat.</p>
                            <p>Krim antihistamin atau krim anti-gatal, termasuk yang mengandung hidrokortison, dapat membantu mengurangi rasa gatal.</p>
                            <p>Seseorang juga dapat menggunakan antihistamin oral untuk gatal parah.</p>
                            <p>Namun, jika mengalami gigitan yang menyakitkan, krim anestesi dapat membantu.</p>
                            <p>Gigitan tungau sering menyebabkan gatal parah, tetapi menggaruk dapat menyebabkan infeksi.</p>
                            <p>Sangat penting untuk mencoba mengurangi rasa gatal dengan obat-obatan, es, atau perawatan lainnya.</p>
                            <p>Perlu diketahui bahwa penggunaan obat-obat tersebut harus menggunakan resep dari dokter.</p>
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
