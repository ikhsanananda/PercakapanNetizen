<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>17 Siswa Indonesia Siap Unjuk Kemampuan di Olimpiade Informatika Asia-Pasifik 2021</title>

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
                                <img src="Main Page/assets/oo.jpeg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 22, 2021</span>
                                <span>
                                    <form action="<?php $halaman=basename($_SERVER['PHP_SELF']); echo $halaman; ?>" method="POST">
                                        <button name="simpan">
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
                            <a href="MainpageEdu.php">17 Siswa Indonesia Siap Unjuk Kemampuan di Olimpiade Informatika Asia-Pasifik 2021</a>
                            <p>Sebanyak tujuh belas siswa SMA dari beberapa provinsi menjadi wakil Indonesia dalam ajang Olimpiade Informatika Asia-Pasifik atau Asia Pacific Informatics Olympiad (APIO) yang berlangsung secara daring tanggal 21-26 Mei 2021.</p>
                            <p>Secara khusus, dalam APIO 2021, Indonesia juga menjadi tuan rumah penyelenggara olimpiade informatika siswa yang diikuti 920 peserta dari 34 negara.</p>
                            <p>APIO tahun ini merupakan hasil kerja sama antara Pusat Prestasi Nasional (Puspresnas) Kemendikbud Ristek dan Ikatan Alumni Tim Olimpiade Komputer Indonesia (IA-TOKI).</p>
                            <p>Negara-negara Asia-Pasifik yang mengirimkan siswa terbaik mereka dalam APIO tahun ini, antara lain; Australia, China, Hongkong, India, Indonesia, Iran, Jepang, Kazakhstan, Korea, Makao, Malaysia, Mongolia, Mesir Selandia Baru, Palestina, Filipina, Rusia, Singapura, Taiwan, Thailand, Turki, Uzbekistan, dan Vietnam.</p>
                            <p>Ketujuhbelas siswa yang menjadi wakil Indonesia dalam APIO 2021, yaitu:</p>
                            <p>
                                <ol>
                                    <li>Juan Carlo Vieri, SMAK Intan Permata Hati, Surabaya - Jawa Timur</li>
                                    <li>Nicholas Patrick, SMA Cita Hati Christian School, Surabaya - Jawa Timur</li>
                                    <li>Matthew Allan, SMP Kanisius, DKI Jakarta Andrew, SMAS Sutomo 1 Medan, Sumatera Utara</li>
                                    <li>Maximilliano Utomo Quok, SMA Xin Zhong, Surabaya - Jawa Timur</li>
                                    <li>Muflih Naufal Maxi, SMA Cahaya Rancamaya, Bogor - Jawa Barat </li>
                                    <li>Albert Ariel Putra, SMA Kristen Petra 4, Surabaya - Jawa Timur </li>
                                    <li>Jonathan Lee, SMAN 2, DKI Jakarta Michael, SMAK St. Louis 1, Surabaya - Jawa Timur</li>
                                    <li>Bryan Riconga Panjinata, SMAN 1 Tuban, Jawa Timur</li>
                                    <li>Nabil Ibadurrahman Ervatra, SMANU MH. Thamrin, DKI Jakarta</li>
                                    <li>Rama Aryasuta Pangestu, SMA Kanisius, DKI Jakarta Pikatan Arya Bramajati, SMA Semesta, Semarang - Jawa Tengah</li>
                                    <li>Edbert Geraldy Cangdinata, SMA Sutomo 1 Medan, Sumatera Utara</li>
                                    <li>Fernando Nathaniel Sutanto, SMA Santa Maria 1 Cirebon, Jawa Barat </li>
                                    <li>Daniel Christian Mandolang, SMAN 2 Cirebon, Jawa Barat</li>
                                    <li>Joshua Adrian Cahyono, SMAK 1 Penabur, DKI Jakarta</li>
                                </ol>
                            </p>
                            <a>Kejar bakat, fokus berlatih</a>
                            <p>Salah satu peserta, Muflih Naufal Maxi dari SMA Cahaya Rancamaya, Bogor optimis ke depan Indonesia akan mampu berkiprah dalam persaingan bidang informatika di tingkat Asia-Pasifik maupun internasional.</p>
                            <p>"Menurut pandangan saya, Indonesia mengalami kemajuan yang cukup pesat di bidang informatika, sehingga saya berharap untuk tahun-tahun selanjutnya Indonesia bisa lebih baik lagi," ungkap Muflih penuh optimisme saat dihubungi Kompas.com (22/5/2021).</p>
                            <p>Penyelenggaraan APIO yang tahun ini dilaksanakan secara daring sebagai dampak pandemi global Covid-19, menurutnya tidak terlalu berarti mengingat bidang informatika ini memang sudah berbasis online.</p>
                            <p>"Untuk bidang Informatika sebenarnya tidak jauh berbeda, karena hanya duduk di depan komputer menulis kode. Meskipun begitu, rasanya tetap agak kurang karena tidak bisa bertemu teman-teman secara langsung," ujar siswa kelas 12 yang juga menyukai matematika ini.</p>
                            <p>"Awalnya saya menyukai kompetisi matematika, tetapi saat memasuki SMA, saya mulai tertarik dengan bidang informatika yang sebenarnya tidak terlalu jauh dengan matematika. Saya menyukai bidang informatika karena melatih skill problem solving saya dan bisa bertemu dengan teman-teman yang memiliki ketertarikan yang sama," lanjut Muflih.</p>
                            <p>Ia berharap, dirinya bersama tim APIO indonesia tahun ini dapat meraih hasil terbaik dan dapat mengharumkan nama Indonesia.</p>
                            <p>"Pesan saya untuk teman-teman, kejarlah minat dan bakat kalian masing-masing dan fokuskan diri kalian untuk berlatih, dan semoga suatu saat nanti, kalian pun bisa ikut mengharumkan nama Indonesia di kancah internasional," pesan Muflih.</p>
                            <a>Wadah penguatan soft skill informatika</a>
                            <p>Dalam kesempatan pembukaan APIO 2021, Plt. Kepala Puspresnas Asep Sukmayadi menegaskan pandemi global justru menjadi momentum transformasi dunia pendidikan dalam mengintregrasikan teknologi informasi dalam pembelajaran.</p>
                            <p>"Disrupsi terhadap dunia pendidikan terus terjadi. Namun juga terjadi transformasi yang sangat kuat dalam hal teknologi, pedagogi, dan pengelolaan pendidikan," ujar Asep Sukmayadi.</p>
                            <p>"Covid-19 memacu berlipat-lipat transformasi cara hidup dan cara belajar dari sekedar manual dan tatap muka menjadi digital dan tatap maya. Transformasi digital menjadi bukan hanya pilihan tapi tuntutan dan keharusan," tegasnya lagi.</p>
                            <p>Oleh karenanya, Asep meyakini APIO 2021 ini dapat menjadi salah satu wadah kompetisi, instrument dan epistemologis dari kompetisi sebagai sarana untuk mencapai tujuan pembelajaran yaitu kemajuan softskill, khususnya di bidang informatika.</p>
                            <p>"Ke depannya, saya harapkan para ahli informatika dan teknologi ini dapat terus mengkaji konsep cyber schools atau blended learning, yang menarik dan menyenangkan bagi dunia pendidikan," harap Asep.</p>
                        
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
                                    <img src="Main Page/assets/kucing.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span>
                                        <i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 16,
                                        2021
                                    </span>
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
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageEdu(5).php">Agar WhatsApp Tak Habiskan Memori HP ala Institut Teknologi Batam</a>
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
