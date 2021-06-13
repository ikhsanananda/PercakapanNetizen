<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>6 SMA Terbaik di Kota dan Kabupaten Malang Berdasar Nilai UTBK 2020</title>

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
                                <img src="Main Page/assets/malang.jpg" class="img" alt="blog1">
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
                        <a href="MainpageEdu(8).php">6 SMA Terbaik di Kota dan Kabupaten Malang Berdasar Nilai UTBK 2020</a>
                            <p>SMA terbaik di Indonesia kini sedang menjadi incaran para siswa dan orangtua jelang Penerimaan Peserta Didik Baru (PPDB) 2021.</p>
                            <p>Apabila siswa masuk ke SMA terbaik, maka akan memberi dampak positif bagi siswa ke depannya.</p>
                            <p>Dari sekian banyak urutan SMA terbaik di Indonesia, ada beberapa SMA terbaik di Kota dan Kabupaten Malang.</p>
                            <p>Menurut Ketua Tim Pelaksana LTMPT, Mohammad Nasih, pada UTBK 2020 telah diikuti sebanyak 662.404 peserta.</p>
                            <p>Sedangkan jumlah siswa yang ikut berasal dari 21.302 sekolah.</p>
                            <p>Berdasarkan hasil itu, ada 1.000 daftar SLTA terbaik diurut berdasarkan nilai Tes Potensi Skolastik (TPS) UTBK 2020.</p>
                            <p>Jumlah SLTA berdasarkan jenis sekolah, yakni SMA sebanyak 872 sekolah, MA sebanyak 65 sekolah, SMK sebanyak 58 sekolah, dan PKBM sebanyak 5 sekolah.</p>
                            <p>Dia mengatakan, rerata nilai TPS peserta dihitung berdasarkan rerata dari nilai 4 sub tes, yaitu kemampuan kuantitatif, kemampuan memahami bacaan dan menulis, memahami kemampuan penalaran umum dan pengetahuan pemahaman umum.</p>
                            <p>Nah berdasarkan penilaian itu, ada beberapa SMA terbaik di Kota dan Kabupaten Malang menurut rerata nilai UTBK 2020.</p>
                            <p>Peringkat itu bisa menjadi patokan bagi orangtua atau siswa yang akan memilih SMA di Kota dan Kabupaten Malang, agar tidak salah pilih.</p>
                            <p>Berikut 6 SMA terbaik di Kota maupun Kabupaten Malang yang masuk pemeringkatan top 1.000 SLTA dengan rerata nilai UTBK 2020 paling tinggi, berdasarkan rangkuman LTMPT yang dilansir pada Selasa (1/6/2020).</p>
                            <a>SMA terbaik di Kota Malang</a>
                            <p><b>1. SMA Negeri 3 Kota Malang</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rata-rata UTBK: 574,806</li>
                                </ul>
                            </p>
                            <p><b>2. SMA K Kolese ST Yusup Kota Malang</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rata-rata UTBK: 574,527</li>
                                </ul>
                            </p>
                            <p><b>3. SMA Negeri 1 Kota Malang</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rata-rata UTBK: 569,392</li>
                                </ul>
                            </p>
                            <p><b>4. SMA Negeri 4 Kota Malang</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rata-rata UTBK: 553,764</li>
                                </ul>
                            </p>
                            <p><b>5. SMA Katolik ST Albertus</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rata-rata UTBK: 549,435</li>
                                </ul>
                            </p>
                            <p><b>6. SMA Negeri 5 Kota Malang</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rata-rata UTBK: 547,075</li>
                                </ul>
                            </p>
                            <a>SMA terbaik di Kabupaten Malang</a>
                            <p><b>1. SMA Negeri 1 Lawang</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rata-rata UTBK: 543,087</li>
                                </ul>
                            </p>
                            <p><b>2. SMA Negeri 1 Kepanjen</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rata-rata UTBK: 542,618</li>
                                </ul>
                            </p>
                            <p><b>3. SMA Ar Rohmah Dau</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rata-rata UTBK: 526,184</li>
                                </ul>
                            </p>
                            <p><b>4. SMA Tazkia IIBS</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rata-rata UTBK: 522,458</li>
                                </ul>
                            </p>
                            <p><b>5. SMA Ar-Rohmah Putri Boarding School Dau</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rata-rata UTBK: 521</li>
                                </ul>
                            </p>
                            <p><b>6. SMA Negeri 1 Tumpang</b></p>
                            <p>
                                <ul>
                                    <li>Nilai rata-rata UTBK: 519,493</li>
                                </ul>
                            </p>
                            <p>Jadi itulah beberapa SMA terbaik di Kota dan Kabupaten Malang. Selamat berjuang siswa, agar memperoleh sekolah yang diinginkan.</p>
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
