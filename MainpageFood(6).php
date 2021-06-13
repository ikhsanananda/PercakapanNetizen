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
                                <img src="Main Page/assets/plepah.png" class="img" alt="blog1">
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
