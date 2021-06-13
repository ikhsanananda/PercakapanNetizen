<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SMA Negeri Ini Terbaik Se-Indonesia Berdasarkan Nilai UTBK 2020</title>

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
                                <img src="Main Page/assets/sma.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 17, 2021</span>
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
                        <a href="MainpageEdu(7).php">SMA Negeri Ini Terbaik Se-Indonesia Berdasarkan Nilai UTBK 2020</a>
                            <p>Lembaga Tes Masuk Perguruan Tinggi (LTMPT) melalui laman resmi di tahun 2020 telah merilis daftar sekolah jenjang SMA, MA, dan SMK dengan nilai rerata Ujian Tulis Berbasis Komputer (UTBK) 2020 tertinggi di Indonesia.</p>
                            <p>Rerata Nilai UTBK 2020 bisa menjadi salah satu pertimbangan dalam memilih SMA, MA, ataupun SMK di Penerimaan Peserta Didik Baru (PPDB) 2021.</p>
                            <p>Ketua LTMPT Prof. Mohamad Nasih mengatakan, jumlah SLTA berasarkan jenis sekolah ialah SMA berjumlah 872 sekolah, MA sebanyak 65, SMK sebanyak 58, serta PKBM 5 sekolah.</p>
                            <p>Berdasarkan pemeringkatan tersebut, SMAN Unggulan MH Thamrin Jakarta menjadi SMAN Terbaik se-Indonesia berdasarkan Nilai UTBK Tahun 2020 versi LTMPT.</p>
                            <p>SMANU MH Thamrin adalah sekolah sains yang berkomitmen untuk memberikan pendidikan berkualitas bagi peserta didik yang memiliki potensi dan kecerdasan istimewa, terutama di bidang sains.</p>
                            <p>"Selamat SMAN Unggulan MH Thamrin Jakarta menjadi SMAN Terbaik se-Indonesia berdasarkan Nilai UTBK Tahun 2020 versi @ltmptofficial," tulis laman Instagram Dinas Pendidikan (Disdik) DKI Jakarta, Senin (7/12/2020).</p>
                            <p>SMAN Unggulan MH Thamrin Jakarta mendapatkan beberapa kategori seperti Top 10 Rerata Sub Pengetahuan Pemahaman Umum, Top 10 Berdasarkan Rerata TPS, Top 10 Rerata Sub Tes Kemampuan Kuantitatif, serta Top 10 Rerata Sub Kemampuan Penalaran Umum.</p>
                            <p>Berikut top 10 SLTA berdasarkan berdasarkan rerata Tes TPS UTBK 2020:</p>
                            <p><b>1. SMAN Unggulan MH Thamrin, DKI Jakarta</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rerata UTBK 2020: 601,683</li>
                                </ul>
                            </p>
                            <p><b>2. MAN Insan Cendekia Serpong</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rerata UTBK 2020: 599,654</li>
                                </ul>
                            </p>
                            <p><b>3. SMAS Unggul Del, Toba Samosir, Sumatera Utara</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rerata UTBK 2020: 598,523</li>
                                </ul>
                            </p>
                            <p><b>4. SMAN 8 Jakarta</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rerata UTBK 2020: 594,865</li>
                                </ul>
                            </p>
                            <p><b>5. SMAN 5 Surabaya</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rerata UTBK 2020: 594,605</li>
                                </ul>
                            </p>
                            <p><b>6. SMAS 1 Kristen BPK Penabur Jakarta Barat</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rerata UTBK 2020: 594,437</li>
                                </ul>
                            </p>
                            <p><b>7. SMAS BPK 1 Penabur Bandung</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rerata UTBK 2020: 592,52</li>
                                </ul>
                            </p>
                            <p><b>8. SMAS Dian Harapan</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rerata UTBK 2020: 589,811</li>
                                </ul>
                            </p>
                            <p><b>9. SMAN 1 Yogyakarta</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rerata UTBK 2020: 588,002</li>
                                </ul>
                            </p>
                            <p><b>10. SMA Katolik St.Louis 1</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rerata UTBK 2020: 587,81</li>
                                </ul>
                            </p>
                            <a>Metode pemeringkatan LTMPT</a>
                            <p>LTMPT menjelaskan, metode yang digunakan dalam pengukuran antara lain:</p>
                            <p>1. SLTA yang diikutkan dalam pengukuran ini adalah SLTA yang jumlah siswa mengikuti UTBK tahun 2020 minimal 20 orang.</p>
                            <p>2. Jumlah SLTA yang memenuhi kriteria sebanyak 6.319 sekolah. Sementara itu, ada 15.000 sekolah yang tidak memenuhi kriteria.</p>
                            <p>3. Rerata nilai TPS peserta dihitung berdasarkan rerata dari nilai 4 sub tes, yaitu kemampuan kuantitatif, kemampuan memahami bacaan dan menulis, memahami kemampuan penalaran umum dan pengetahuan pemahaman umum.</p>
                            <p>"Ini adalah ukuran yang menunjukkan passion kita ada di mana, apakah kuantitatifnya, atau penalaran umum yang lebih tinggi. Sehingga pilihan seyogyanya akan mengarah pada prodi-prodi yang sesuai dengan minat dan kemampuan," saran Nasih kepada peserta webinar, Sabtu (28/11/2020).</p>
                            <p>4. Rerata nilai TPS sekolah dihitung berdasarkan rerata nilai TPS dari peserta di sekolah tersebut.</p>
                            <p>5. SLTA diurutkan berdasarkan rerata nilai TPS dari tertinggi hingga terendah.</p>
                            <p>6. Diambil 1.000 SLTA dengan rerata nilai TPS tertinggi.</p>
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
    <script src="Main Page/js/Jquery3.4.1.min.js"></script>

    <!-- --------- Owl-Carousel js ------------------->
    <script src="Main Page/js/owl.carousel.min.js"></script>

    <!-- ------------ AOS js Library  ------------------------- -->
    <script src="Main Page/js/aos.js"></script>

    <!-- Custom Javascript file -->
    <script src="Main Page/js/main.js"></script>
</body>

</html>
