<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mengenal Plepah, Komunitas yang Kembangkan Wadah Makanan Ramah Lingkungan</title>

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
                                <img src="Main Page/assets/plepah.png" class="img" alt="blog1">
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
                            <a href="MainpageFood(6).php">Mengenal Plepah, Komunitas yang Kembangkan Wadah Makanan Ramah Lingkungan</a>
                            <p>Sebuah organisasi Footloose Initiative memulai riset tentang kemasan ramah lingkungan yang sistemnya berbasis komunitas bernama Plepah pada tahun 2018.</p>
                            <p>Dari riset ini, muncul inovasi yang berhasil membuat limbah tak bernilai yaitu pelepah pinang menjadi wadah makanan ramah lingkungan.</p>
                            <p>Wadah makanan dari pelepah pinang ini diolah dengan tepat sehingga tahan panas, tahan air, dan tahan minyak. Masa hancur wadah tersebut hanya butuh 60 hari.</p>
                            <p>Saat ini, Plepah sedang bekerja sama dengan Pusat Penelitian Biomaterial LIPI di Cibinong, Jawa Barat, untuk mengembangkan bahan-bahan alami lain sebagai alternatif kemasan sekali pakai.</p>
                            <p>Adapun, bahan-bahan yang sedang mereka teliti adalah batang pohon pisang, sorgum, tongkol jagung, serat kelapa, dan bambu.</p>
                            <p>Nantinya, bahan-bahan tersebut diolah menjadi bubur (pulp) sebelum akhirnya direkatkan menggunakan perekat alami.</p>
                            <a>Memberikan manfaat yang lebih luas</a>
                            <p>Dalam pengoperasiannya, Plepah menggunakan skema micro manufacturing.</p>
                            <p>Skema tersebut dipilih agar teknologinya bisa diadaptasi oleh masyarakat di pedesaan, terutama di area-area terpencil.</p>
                            <p>“Apalagi intervensi pertama kami berada di tengah-tengah perkebunan karet dan kelapa sawit," kata Rengkuh.</p>
                            <p>"Kami fokusnya memberdayakan masyarakat di area konservasi tersebut supaya ada produktivitas lain dan peningkatan ekonomi,” lanjutnya.</p>
                            <p>Proses produksi menggunakan sumber listrik dari solar panel, turbin air, atau lainnya dengan daya yang lebih hemat.</p>
                            <p>Selain itu, mesin produksi juga didesain sepraktis mungkin agar memudahkan distribusi dan tidak memakan banyak ruang.</p>
                            <p>
                                <div>
                                    <img src="Main Page/assets/plepah1.jpg" class="img" alt="blog1">
                                </div>
                            </p>
                            <p>Saat ini titik produksinya berada di Desa Mendis di Kabupaten Musi Banyuasin, Sumatera Selatan. Satu titik dapat menyerap 15 tenaga kerja hanya untuk produksi saja.</p>
                            <p>Rengkuh menjelaskan, mereka sudah membuka kantong-kantong suplai bahan baku.</p>
                            <p>Mereka sudah bermitra dengan para petani pemilik kebun pinang di Kabupaten Tanjabung Timur dan Tanjabung Barat, Jambi, di luar dari 15 tenaga kerja tadi.</p>
                            <p>“Kalau ditotal, mitra kami sebagai suplai material kurang lebih sudah mencapai 33 kepala keluarga,” ujarnya.</p>
                            <p>Sementara, Staf Ahli Bidang Inovasi dan Kreativitas dari Kementerian Pariwisata dan Ekonomi Kreatif (Kemenparekraf) Josua Simanjuntak, menyebutkan Plepah berpotensi untuk menyerap tenaga kerja.</p>
                            <p>“Kalau kita lihat dari satu daerah saja di Jambi potensinya bisa dioptimalkan itu 600 juta packaging tiap tahunnya bisa diproduksi," jelas Josua.</p>
                            <p>"Kita hitung, bisa menyerap mungkin sampai 80.000 tenaga kerja di satu titik,” ucap Josua.</p>
                            <a>Harapkan empati dan kesadaran masyarakat</a>
                            <p>Saat ini Plepah masih terkendala harga retail seharga Rp 5.000 per satuan.</p>
                            <p>Harga tersebut tentu jauh jika dibandingkan dengan wadah makanan berbahan styrofoam yang harganya Rp 300.</p>
                            <p>“(Tantangan) saat ini lebih ke wawasan masyarakat karena mungkin kita juga tidak bisa secepat itu menurunkan harga diakibatkan mungkin scale-up kapasitasnya belum terjadi," ” kata Rengkuh.</p>
                            <p>"Prosesnya tetap kami dorong untuk lebih cepat," lanjutnya.</p>
                            <p>
                                <div>
                                    <img src="Main Page/assets/plepah2.jpeg" class="img" alt="blog1">
                                </div>
                            </p>
                            <p>Namun, ia juga berharap pada wawasan dan empati masyarakat terhadap isu lingkungan.</p>
                            <p>Pada akhirnya, membuat masyarakt mau berinvestasi secara langsung menggunakan produk-produk ramah lingkungan.</p>
                            <p>Ia berharap, dengan semakin banyaknya produk yang diterima di pasar, semakin cepat bagi mereka untuk menurunkan harga retail.</p>
                            <p>Hingga akhirnya produk Plepah bisa digunakan oleh semua kalangan.</p>
                            <p>Tidak hanya itu, mereka juga sedang melihat potensi pengembangan material-material lain.</p>
                            <p>Ada jerami padi yang kemungkinan akan difokuskan di Cianjur, Jawa Barat, sorghum di Larantuka, Nusa Tenggara Timur, dan kelapa di Sulawesi.</p>
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
