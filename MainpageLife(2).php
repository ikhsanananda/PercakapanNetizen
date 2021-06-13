<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>6 Kesalahan Memasak Sayuran yang Mungkin Tak Disadari</title>

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
                                <img src="Main Page/assets/sayur.jpg" class="img" alt="blog1">
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
                            <a href="MainpageLife(2).php">6 Kesalahan Memasak Sayuran yang Mungkin Tak Disadari</a>
                            <p>Sayur-sayuran kaya akan nutrisi dan merupakan bagian dari pola makan seimbang.</p>
                            <p>Namun, makanan paling sehat sekalipun bisa menjadi tidak sehat atau manfaatnya hilang jika tidak diolah atau dimasak dengan tepat.</p>
                            <p>Merangkun sejumlah sumber, berikut sejumlah kesalahan memasak sayuran yang mungkin tak disadari namun masih banyak dilakukan:</p>
                            <a>1. Membumbui terlalu banyak</a>
                            <p>Bumbu atau dressing memang bisa membuat sayur-sayuran menjadi lebih nikmat.</p>
                            <p>Namun, menambah terlalu banyak bumbu atau dressing malah bisa membuat sayur yang kita makan menjadi tidak sehat.</p>
                            <p>Bumbu, misalnya, jika ditambahkan terlalu banyak bisa membuat sayuran yang kita makan menjadi tinggi sodium dan pada akhirnya menyebabkan retensi air. Begitu pula dengan dressing yang biasa digunakan pada salad.</p>
                            <p>Jadi, gunakanlah bumbu dan dressing dalam ukuran wajar.</p>
                            <a>2. Tidak mencuci sayur</a>
                            <p>Banyak sayuran yang ditanam secara konvensional mengandung pestisida seperti seledri, bayam, paprika manis, tomat, dan lainnya.</p>
                            <p>Jika tidak mencuci sayur sebelum dimasak, kita berpotensi menelan residu kimiawi pada sayuran yang dapat menyebabkan sakit perut, mual, hingga diare, hingga gangguan fungsi organ.</p>
                            <a>3. Menggoreng sayur </a>
                            <p>Makanan yang digoreng memang terasa nikmat tetapi tidak sehat dan tinggi kandungan lemak.</p>
                            <p>Makanan yang digoreng berkaitan dengan peningkatan risiko penyakit seperti diabetes dan penyakit jantung.</p>
                            <p>Saat ini, sudsh tersedia air fryer yang hanya memerlukan satu sendok teh minyak untuk menggoreng makanan apa pun.</p>
                            <p>Jika berniat beralih ke makanan sehat tetapi masih ingin menikmati gorengan pada saat yang sama, menggunakan air fryer bisa menjadi alternatif yang sedikit lebih sehat.</p>
                            <a>4. Memasak terlalu lama</a>
                            <p>Salah satu kesalahan memasak sayuran yang umum dilakukan adalah terlalu lama mengekspos panas pada sayuran.</p>
                            <p>Terlalu lama memasak sayuran akan merusak mayoritas nutrisi yang terkandung di dalamnya.</p>
                            <p>Merebusnya juga tidak disarankan. Metode ini menyebabkan mikronutrien yang larut dalam air seperti riboflavin, folat, serta vitamin B dan C larut ke dalam air, yang kemudian akan dibuang oleh oleh kebanyakan orang.</p>
                            <p>Begitu pula jika digoreng. Menggoreng sayur, seperti yang telah dijelaskan sebelumnya, akan membuat nutrisi di dalam sayur hilang dan menyebabkan lemak berlebih.</p>
                            <p>Jadi, lebih disarankan untuk mengukus sayuran selama lima menit di dalam panci dengan api sedang.</p>
                            <P>Jika ingin membuat masakan seperti kentang goreng, jangan gunakan deep frier dan lebih baik memanggangnya di atas nampan logam.</P>
                            <a>5. Mengupas sayur</a>
                            <p>Ini adalah hal yang cukup sering dilakukan oleh banyak orang padahal sebaiknya tidak dilakukan.</p>
                            <p>Kulit dari beberapa jenis sayur, seperti kentang, wortel, labu, hingga mentimun, mengandung banyak vitamin dan mineral yang sayang untuk dilewatkan.</p>
                            <P>Kulit sayuran juga tinggi akan serat yang baik untuk memperlancar sistem pencernaan.</P>
                            <a>6. Merebus, bukan melakukan blanching</a>
                            <p>Blanching adalah proses merebus atau mengukus sebentar sayuran hingga matang sebagian.</p>
                            <p>Langkah ini penting dilakukan sebelum membekukan sayuran untuk disimpan. Beberapa jenis sayuran yang disarankan untuk dilakukan blanching termasuk brokoli, sayuran berdaun hijau, buncis, dan asparagus.</p>
                            <p>Sebetulnya, sayuran yang dibekukan tanpa direbus dan dilakukan blanching tetap aman untuk dimakan. Tapi, sayuran tersebut akan memiliki warna, tekstur dan rasa yang tampak tidak sesuai.</p>
                            <p>Misalnya, seikat bayam mentah yang disimpan di kulkas kemudian dikeluarkan ketika hendak digunakan sering kali tampak lebih gelap daunnya dan lengket.</p>
                            <p>Contoh lainnya adalah brokoli yang kita masak dan tidak melalui blanching sebelumnya sering kali tampak layu serta tidak segar dan renyah seperti masakan brokoli di restoran.</p>
                            <p>Proses blanching akan menghentikan aktivitas enzimatik yang merusak sayuran. Enzim ini dapat bertahan pada suhu beku dan melanjutkan proses pembusukan meskipun makanan dibekukan. Mengolah makanan sebelumnya dalam air mendidih atau uap akan membunuh enzim tersebut.</p>
                            <p>Setelah dilakukan blanching, makanan bisa disimpan di kulkas kemudian dihangatkan atau dimasak sebentar sebelum disantap.</p>
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
