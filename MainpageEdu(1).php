<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pakar IPB Beberkan Alasan Tidak Ada Kucing Belang Tiga Jantan</title>

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
                                <img src="Main Page/assets/kucing.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 16, 2021</span>
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
                            <a href="MainpageEdu(1).php">Pakar IPB Beberkan Alasan Tidak Ada Kucing Belang Tiga Jantan</a>
                            <p>Penyuka kucing pasti bingung. Mengapa, kucing belang tiga hanya bisa ditemukan di kucing betina saja?</p>
                            <p>Sementara, sulit sekali mencari kucing belang tiga berjenis kelamin jantan. Ada mitos, kucing jantan belang tiga bisa membawa keberuntungan.</p>
                            <p>Misalnya, di mitos Jawa, kucing kembang telon dipandang memiliki kekuatan mistis yang kuat. Bahkan, di banyak negara ada sebutan khusus bagi kucing belang tiga. Seperti di Perancis dipanggil chatte d'Espagne. Sementara di Jepang disebut mi-ke. Ada kepercayaan, memelihara kucing jantan belang tiga akan membawa keberuntungan finansial.</p>
                            <p>Ternyata, fenomena ini dibedah secara ilmiah pun ada penjelasannya. Guru Besar IPB University sekaligus Geneticist, Pemerhati Pendidikan dan Budaya Prof. Ronny Rachman Noor memiliki penjelasannya.</p>
                            <p>Ia menjelaskan secara rinci terkait fenomena genetik yang menjadi misteri pada kucing belang tiga atau dalam dunia perkucingan dikenal sebagai kucing Calico.</p>
                            <p>Kata Prof. Ronny, kucing domestik memiliki jumlah kromosom sebanyak 38 buah. Kromosom ini di setiap sel tubuhnya ada dalam keadaan berpasangan yaitu 19 pasang.</p>
                            <p>Di antara 19 pasang krosomom yang dimiliki oleh kucing ini, ada 18 pasang yang disebut dengan kromosom autosom (autosomal chromosome) dan sepasang kromosom sex (sex chromosome). Pasangan kromosom ini didapat separuhnya dari pejantan dan separuhnya lagi dari induknya.</p>
                            <p>Jadi seekor kucing jantan akan memiliki 18 pasang kromosom autosom dan sepasang kromosom sex (X dan Y; bisanya dinotasikan sebagai XY), sedangkan kucing betina memiliki 18 pasang autosom dan sepasang krosomosm sex (X dan X; dinotasikan sebagai XX).</p>
                            <p>“Warna Calico melibatkan beberapa mekanisme pewarisan sifat yang terletak di kromosom autosom dan kromosom sex. Warna yang paling umum terlibat adalah warna merah dan hitam atau pengganti warna merah dapat saja berupa warna lain yaitu orange, kuning dan cream, sedangkan warna hitam dapat saja berupa warna lain yaitu coklat, tabby dan biru,” ujarnya.</p>
                            <p>Kedua kelompok warna ini dalam ilmu genetika pewarisannya dikenal dengan sex linked co-dominant. Artinya warna merah dan hitam ini adanya di kromosom sex dan pewarisannya tidak saling mendominasi.</p>
                            <p>Jadi variasi warna kucing jantan hanya ada dua saja yaitu merah (orange, kuning dan cream) dan hitam (coklat, tabby dan biru) saja, karena hanya memiliki satu kromosom sex saja.</p>
                            <p>Sedangkan kucing betina dapat saja memiliki warna merah (orange, kuning dan cream), warna hitam (coklat, tabby dan biru) dan warna tortoiseshell jika dalam keadaan heterosigot atau susunan gen pada organisme yang memiliki pasangan alel (gen pada lokus) yang berbeda.</p>
                            <p>Bagaimana dengan kucing belang tiga? Kemunculan warna belang tiga disamping melibatkan cara pewarisan sifat terpaut kelainan (sex linked) juga melibatkan gen yang ada di autosom yang mengontrol kemunculan warna solid dan warna totol-totol putih.</p>
                            <p>Ada tiga kombinasi pola warna yang dihasilkan oleh gen ini yaitu polos jika gennya ada dalam keadaan homosigot resesif (ss), totol putih terbatas jika ada dalam keadaan heterosigot (Ss) dan totol putih yang intensif jika gennya ada dalam keadaan homosigot dominan (SS).</p>
                            <p>Warna belang tiga akan muncul jika kombinasi gen yang menghasilkan warna tortoiseshell bersamaan dengan gen yang menyebabkan warna totol putih baik homisigot (SS) maupun heterosigot (Ss).</p>
                            <p>“Jadi secara genetik, hanya ada kucing belang tiga betina saja karena kucing betina memiliki dua krosomosm X (XX) dan gen pengontrol munculnya warna merah (orange, kuning dan cream) dan warna hitam (coklat, tabby dan biru) yang ada di kromosom sex X ada dalam keadaan heterosigot,” jelasnya.</p>
                            <p>Prof. Ronny menjelaskan meski kejadiannya sangat jarang sekali, masih ada kemungkinan muncul kucing jantan belang tiga. Kemunculan kucing jantan belang tiga ini terjadi karena abnormalitas jumlah kromosom X nya, yaitu memiliki kelebihan kromosom X, sehingga kucing jantan yang biasanya memiliki kromosom sex XY kini memiliki kromosom sex XXY.</p>
                            <p>“Pada manusia kelainan kelebihan kromosom XXY ini juga terjadi yang dinamakan dengan Klinefelter Syndrome. Kelebihan kromosom X inilah yang memungkinkan warna merah (orange, kuning dan cream) dan warna hitam (coklat, tabby dan biru) ada dalam keadaan heterosigot. Namun biasanya mortalitas saat kebuntingan ataupun sesaat setelah lahir kucing ini sangat tinggi. Kalaupun kucing jantan belang tiga ini dapat bertahan hidup sampai dewasa biasanya tidak dapat bereproduksi karena adanya tambahan kromosom X ini,” imbuhnya.</p>
                            <p>Jarang atau tidak adanya kucing jantan belang tiga ini memunculkan mitos dan kepercayaan pihak tertentu, biasanya paranormal, dukun dan lain-lainnya bahwa kucing belang tiga ini jika dimiliki memiliki kekuatan ghaib tersendiri dan dipercaya akan menambah kemampuan supranatural pemiliknya.</p>
                            <p>Banyak juga cerita yang berkembang secara turun menurun bahwa pejantan (bapak) kucing akan membunuh anak jantannya yang berwarna belang tiga. Kedua mitos dan kepercayaan yang berkembang di masyarakat ini sebaiknya tidak dipercaya karena memang tidak ada dasar ilmiahnya.</p>
                            <p>Prof. Ronny menekankan bahwa kemunculan kucing jantan belang tiga yang sangat jarang memang terkait dengan fenomena genetik.</p>
                            <p>Karena abnormalitas kelebihan kromosom sex X. Sedangkan kematian kucing jantan belang tiga di kandungan dan sesaat setelah lahir bukan dimakan bapaknya, melainkan karena mortalitas yang tinggi akibat kelebihan kromosom X ini dan biasanya sudah mati sebelum atau sesaat setelah dilahirkan.</p>
                            <p>“Dunia kucing memang sangat menawan dan masih banyak rahasia yang akan diungkap,” ucapnya.</p>
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