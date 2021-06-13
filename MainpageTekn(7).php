<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kominfo Mulai Matikan TV Analog Agustus 2021</title>

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
                                <img src="Main Page/assets/tv.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21, 2021</span>
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
                        <a href="MainpageTekn(7).php">Kominfo Mulai Matikan TV Analog Agustus 2021</a>
                            <p>Kementerian Komunikasi dan Informatika (Kominfo) akan mulai menghentikan siaran TV Analog atau Analog Switch Off (ASO) secara bertahap.  Tahap pertama penghentian siaran analog paling lambat dilakukan pada 17 Agustus 2021.</p>
                            <p>Hal tersebut diatur dalam Peraturan Menteri (Permen) Kominfo Nomor 6 Tahun 2021 tentang Penyelenggaraan Penyiaran.</p>
                            <p>Juru Bicara Kominfo, Dedy Permadi mengatakan bahwa ASO akan dilaksanakan secara bertahap mengikuti kesiapan daerahnya.</p>
                            <p>Ada sejumlah faktor yang mendasari kebijakan tersebut seperti pertimbangan kesiapan industri, keterbatasan spektrum frekuensi radio, hingga masukan dari Lembaga Penyiaran.</p>
                            <p>"Faktor keterbatasan spektrum frekuensi menjadi faktor penting mengapa ASO dilakukan secara bertahap," ujar Dedy dalam keterangan resmi yang diterima KompasTekno, Senin (7/6/2021).</p>
                            <p>
                                <div>
                                    <img src="Main Page/assets/tv1.jpg" class="img" alt="sam1">
                                </div>
                            </p>
                            <p>Dedy juga mengatakan, saat ini dilakukan penataan frekuensi antara siaran analog yang masih berjalan dengan siaran digital yang perlahan diperkenalkan. Tujuannya agar masyarakat mulai beralih dan membiasakan diri dengan siaran digital.</p>
                            <p>Meski dilakukan secara bertahap, penghentian siaran analog di daerah yang sudah ditentukan harus dilaksanakan secara serentak oleh semua stasiun televisi di daerah tersebut.</p>
                            <p>"Sehingga memudahkan masyarakat untuk menonton siaran dari satu jenis penerimaan saja," kata Dedy.</p>
                            <p>Adapun pelaksanaan ASO dibagi menjadi lima tahap, di mana Tahap I akan dilaksanakan paling lambat 17 Agustus 2021, sedangkan Tahap V bakal dilakukan selambat-lambatnya 2 November 2022.</p>
                            <p>Berikut ini adalah rincian wilayah tahap pertama di mana siaran analog akan dimatikan selambat-lambatnya 17 Agustus mendatang.</p>
                            <p><b>Tahap I (17 Agustus 2021)</b></p>
                            <p>
                                <ul>
                                    <li>Aceh –1, meliputi Kabupaten Aceh Besar dan Kota Banda Aceh</li>
                                    <li>Kepulauan Riau -1, meliputi Kabupaten Bintan, Kabupaten Karimun, Kota Batam, dan Kota Tanjung Pinang.</li>
                                    <li>Banten -1, meliputi Kabupaten Serang, Kabupaten Cilegon, dan Kota Serang.</li>
                                    <li>Kalimantan Timur -1, meliputi Kabupaten Kutai Kata negara, Kota Samarinda, dan Kota Bontang.</li>
                                    <li>Kalimantan Utara -1, meliputi Kabupaten Bulungan dan Kota Tarakan.</li>
                                    <li>Kalimantan Utara -3, meliputi Kabupaten Nunukan.</li>
                                </ul>
                            </p>
                            <p><b>Cara menikmati siaran TV digital</b></p>
                            <p>Untuk menikmati siaran digital, pengguna TV dengan antena rumah UHF dan TV analog perlu memasang alat bantu penerima siaran digital berupa set top box DVBT2 (STB).</p>
                            <p>Sedangkan pengguna yang sudah menggunakan TV digital cukup membeli antena khusus siaran digital dan dapat langsung menikmati siaran tanpa STB. STB maupun TV digital dapat dibeli di toko elektronik maupun marketplace daring.</p>
                            <p>Informasi mengenai STB dan TV digital yang sudah tersertifikasi Kementerian Kominfo dapat dilihat melalui tautan berikut.</p>
                            <p>Saat proses ASO/digitalisasi penyiaran selesai nanti, tidak akan ada siaran analog yang tersedia, sehingga pemiliki TV analog tidak akan bisa menerima siaran digital televisi jika tidak memasang STB.</p>
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
                                    <img src="Main Page/assets/ketimun.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span>
                                        <i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021
                                    </span>
                                </div>
                            </div>

                            <div class="post-title">
                                <a href="MainpageLife(1).php">6 Kesalahan Memasak Sayuran yang Mungkin Tak Disadari</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/sayur.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageLife(2).php">6 Kesalahan Memasak Sayuran yang Mungkin Tak Disadari</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/casio.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageLife(3).php">Casio Bikin Jam Tangan G-Shock Versi Paling Tipis, Harganya?</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/dog.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageLife(4).php">Apakah Anjing Punya Perasaan Bersalah?</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/urat.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageLife(5).php">7 Gejala Asam Urat yang Tak Boleh Diabaikan</a>
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
