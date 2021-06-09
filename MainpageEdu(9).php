<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Universitas Pertamina Buka Seleksi Nilai Rapor, Beasiswa hingga 100 Persen</title>

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
                                <img src="Main Page/assets/pertamina.jpg" class="img" alt="blog1">
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
                            <a href="MainpageEdu(9).php">Universitas Pertamina Buka Seleksi Nilai Rapor, Beasiswa hingga 100 Persen</a>
                            <p>Universitas Pertamina kembali membuka pendaftaran Seleksi Nilai Rapor untuk siswa SMA/SMK sederajat yang lulus tahun 2020 dan 2021.</p>
                            <p>Pendaftaran Seleksi Nilai Rapor Periode 5 telah dibuka sejak 5 Mei hingga 21 Juni 2021.</p>
                            <p>Pada jalur ini, calon mahasiswa berkesempatan untuk meraih beasiswa, yakni Beasiswa Ujung Negeri dan Beasiswa Pengembangan Prestasi (BPP) berupa pembebasan biaya SPI dan SPP hingga 100 persen.</p>
                            <p>Mata pelajaran yang diperhitungkan dalam Seleksi Nilai Rapor Universitas Pertamina adalah:</p>
                            <p>
                                <ul>
                                    <li>Kelompok IPA meliputi Matematika, Bahasa Indonesia, Bahasa Inggris, Fisika dan Kimia.</li>
                                    <li>Kelompok IPS meliputi Matematika, Bahasa Indonesia, Bahasa Inggris, Ekonomi dan Sosiologi.</li>
                                    <li>Kelompok IPC meliputi Matematika, Bahasa Indonesia, Bahasa Inggris, Fisika, Kimia, Ekonomi dan Sosiologi.</li>
                                    <li>Nilai yang diinput sesuai dengan data nilai yang benar dimiliki oleh siswa pada Rapor Semester 1-5.</li>
                                </ul>
                            </p>
                            <a>Persyaratan</a>
                            <p>1. Persyaratan peserta adalah siswa SMA/sederajat lulusan tahun 2020 dan 2021, serta memiliki nilai rapor semester 1-5.</p>
                            <p>2. Peserta tidak menderita buta warna untuk beberapa program studi yang mempersyaratkan bebas buta warna.</p>
                            <p>3. Pada seleksi jalur ini, peserta cukup menginput nilai rapor dan mengunggah scan dokumen nilai rapor semester 1-5 pada saat pengisian data diri sesuai dengan jadwal yang ditentukan.</p>
                            <p>4. Pengisian data diri untuk peserta Seleksi Nilai Rapor Periode 5 dapat dilakukan pada tanggal 05 Mei – 22 Juni 2021 dengan Login pada laman: (https://pendaftaran.universitaspertamina.ac.id/ ) menggunakan nomor pendaftaran dan password yang diterima melalui email Konfirmasi Pembayaran.</p>
                            <p>5. Peserta yang tidak melakukan pengisian data diri akan dianggap mengundurkan diri dari seleksi.</p>
                            <p>6. Pilihan kelompok ujian disesuaikan dengan pilihan program studi yang dituju.</p>
                            <p>7. Peserta dapat memilih empat program studi yang ada di Universitas Pertamina berdasarkan kelompok ujian yang dipilih.</p>
                            <p>8. Lokasi ujian hanya tersedia Kota Jakarta (default) karena seleksi dilaksanakan secara online. Namun peserta tidak perlu datang ke Kota Jakarta, pun tidak perlu mengikuti tes tertulis apapun.</p>
                            <p>9. Peserta yang dapat mengikuti seleksi ini adalah peserta yang telah melakukan pendaftaran dan pembayaran biaya pendaftaran.</p>
                            <p>10. Biaya pendaftaran dibedakan sesuai dengan kelompok seleksi yang dipilih, yaitu bagi kelompok IPA/IPS sebesar Rp 150.000, sedangkan untuk kelompok IPC sebesar Rp 200.000.</p>
                            <a>Syarat berkas</a>
                            <p>1. Soft-file pas foto dengan ukuran < 200Kb dan dalam format jpg, jpeg atau png. Pas foto merupakan foto formal dengan latar belakang merah atau biru.</p>
                            <p>2. Kartu Keluarga.</p>
                            <p>3. Ijazah (bagi lulusan tahun 2020).</p>
                            <p>4. Soft-file scan nilai rapor semester 1-5 dalam format pdf dan dibuat dalam satu file (tidak terpisah-pisah per semester) dengan ukuran < 2MB. Berkas nilai rapor harap dapat dibaca dengan jelas untuk memudahkan proses verifikasi berkas. Nilai Rapor yang diinput adalah nilai aspek “Pengetahuan” atau “Kognitif” dan Kelompok “Wajib”.</p>
                            <p>5. Slip gaji kedua orangtua dalam bentuk PDF dengan ukuran maksimal 2 MB.</p>
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
