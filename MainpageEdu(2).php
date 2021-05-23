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
                                <img src="Main Page/assets/bca.jpg" class="img" alt="blog1">
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