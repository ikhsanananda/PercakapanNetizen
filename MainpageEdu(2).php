<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BCA Buka Beasiswa 2022 Lulusan SMA/SMK, Kuliah Gratis dan Uang Saku</title>

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
                                <img src="Main Page/assets/bca.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 19, 2021</span>
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
                            <a href="MainpageEdu(2).php">BCA Buka Beasiswa 2022 Lulusan SMA/SMK, Kuliah Gratis dan Uang Saku</a>
                            <p>BCA kembali membuka beasiswa untuk lulusan SMA/SMK untuk kuliah gratis melalui Program Pendidikan Teknik Informatika (PPTI) dan Program Pendidikan Bisnis dan Perbankan (PPBP) untuk tahun 2022.</p>
                            <p>PPTI/PPBP merupakan program pendidikan yang diselenggarakan oleh BCA guna menghasilkan tenaga kerja profesional di bidang akuntansi, keuangan dan teknik informatika.</p>
                            <p>Program pendidikan akan berlangsung selama 2,5 tahun bertempat di BCA Learning Institute. Lulusan beasiswa ini, para mahasiswa akan berkesempatan mendapatkan penawaran kerja di BCA.</p>
                            <p>Pendaftaran Beasiswa BCA 2022 berlangsung 3 Mei-31 Agustus 2021. Berikut informasi seputar beasiswa BCA 2022, melansir laman resmi BCA, Rabu (19/5/2021):</p>
                            <a>Cakupan</a>
                            <p>
                                <ul>
                                    <li>Disediakan buku pelajaran sepanjang program pembelajaran berlangsung dan laptop (khusus untuk PPTI).</li>
                                    <li>Bebas biaya pendidikan dan mendapatkan uang saku bulanan.</li>
                                    <li>Mendapatkan kesempatan magang dan penawaran kerja BCA.</li>
                                    <li>Dormitory, Shuttle Bus, dan mendapatkan makan siang.</li>
                                </ul>
                            </p>
                            <a>Jenis dan syarat beasiswa</a>
                            <p><b>1. Program Pendidikan Teknik Informatika (PPTI)</b></p>
                            <p>Program Pendidikan Teknik Informatika (PPTI) berlangsung selama 30 bulan, ditujukan bagi lulusan SMA dari jurusan IPA/ SMK dari jurusan yang berkaitan dengan teknik informatika yang berprestasi dan memiliki minat di bidang Teknik Informatika.</p>
                            <p>Selain kegiatan belajar yang dilakukan di kelas, peserta juga wajib mengikuti program on the job training di unit kerja BCA, mendapatkan pembekalan soft skill, seperti kepemimpinan, kerja tim, pembentukan karakter dan perencanaan keuangan.</p>
                            <p>Program ini tidak memiliki ikatan dinas. Namun setelah lulus program, para peserta akan berkesempatan mendapatkan penawaran kerja di BCA.</p>
                            <p>Kualifikasi:</p>
                            <p>
                                <ul>
                                    <li>Warga negara Indonesia</li>
                                    <li>Siswa/i kelas XII atau lulusan SMA (jurusan IPA) /SMK (jurusan yang berkaitan dengan Teknik Informatika)</li>
                                    <li>Usia maksimum 19 tahun saat mendaftar</li>
                                    <li>Rata-rata nilai rapor kelas X s/d XII minimal 7,50. Silakan mengisi angka "0.00" pada kolom nilai rapor kelas XI semester 2 (jika nilai rapor belum keluar)</li>
                                    <li>Rata-rata nilai matematika atau nilai produktif minimal 7,50</li>
                                    <li>Tidak pernah tinggal kelas dari SD-SMA/SMK</li>
                                    <li>Tidak pernah terlibat narkoba dan pelanggaran hukum lainnya</li>
                                    <li>Lulus dalam proses seleksi</li>
                                </ul>
                            </p>
                            <p><b>2. Program Pendidikan Bisnis dan Perbankan (PPBP)</b></p>
                            <p>Program Pendidikan Bisnis dan Perbankan (PPBP) berlangsung selama 30 bulan, ditujukan bagi lulusan SMA/ SMK yang berprestasi dari seluruh jurusan dan memiliki minat di bidang Bisnis dan Perbankan.</p>
                            <p>Selain kegiatan belajar yang dilakukan di kelas, peserta juga wajib mengikuti program on the job training di unit kerja BCA, mendapatkan pembekalan soft skill, seperti kepemimpinan, kerja tim, pembentukan karakter dan perencanaan keuangan.</p>
                            <p>Program ini tidak memiliki ikatan dinas. Namun demikian, peserta diberikan kesempatan untuk bekerja di BCA selepas menyelesaikan program tersebut, sesuai dengan kebutuhan perusahaan.</p>
                            <p>Kualifikasi:</p>
                            <p>
                                <ul>
                                    <li>Warga negara Indonesia</li>
                                    <li>Siswa/siswi kelas XII / lulusan SMA/SMK</li>
                                    <li>Usia maksimum 19 tahun saat mendaftar</li>
                                    <li>Rata-rata nilai rapor kelas X s/d XII minimal 7,50. Silakan mengisi angka "0.00" pada kolom nilai rapor kelas XI semester 2 (jika nilai rapor belum keluar)</li>
                                    <li>Rata-rata nilai Matematika (SMA IPA,IPS) atau Nilai Produktif (khusus SMK) minimal 7,50</li>
                                    <li>Tidak pernah tinggal kelas dari SD-SMA/SMK Tidak pernah terlibat narkoba dan pelanggaran hukum lainnya</li>
                                    <li>Lulus dalam proses seleksi</li>
                                </ul>
                            </p>
                            <p><b>Tahapan seleksi</b></p>
                            <p>
                                <ol>
                                    <li>Seleksi administrasi</li>
                                    <li>Tes online</li>
                                    <li>Tes psikologi</li>
                                    <li>Wawancara I</li>
                                    <li>Wawancara II</li>
                                    <li>Tes Kesehatan</li>
                                </ol>
                            </p>
                            <p><b>Pendaftaran</b></p>
                            <p>Informasi seputar cakupan, syarat hingga pendaftaran Beasiswa Pendidikan BCA 2022 dapat diakses melalui laman resmi BCA https://karir.bca.co.id/beasiswa-bca </p>
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
