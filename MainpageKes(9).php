<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sama-sama Olahan Kedelai, Mana yang Lebih Sehat Tempe atau Tahu?</title>

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
                                <img src="Main Page/assets/tahu.jpg" class="img" alt="blog1">
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
                        <a href="MainpageKes(9).php">Sama-sama Olahan Kedelai, Mana yang Lebih Sehat Tempe atau Tahu?</a>
                            <p>Tempe dan tahu merupakan makanan olahan dari kedelai.</p>
                            <p>Tahu dibuat dari susu kedelai yang digumpalkan dan ditekan menjadi balok-balok putih padat.</p>
                            <p>Di sisi lain, tempe terbuat dari kedelai yang telah difermentasi dan dipadatkan menjadi padat.</p>
                            <p>Keduanya menjadi salah satu makanan yang sering dikonsumsi oleh masyarakat Indonesia.</p>
                            <p>Harganya yang murah dan nutrisinya yang tinggi menjadikan dua bahan makanan wajib di daftar menu mereka.</p>
                            <p>Di samping itu, makanan yang kaya akan protein nabati ini juga menjadi makanan pengganti daging untuk orang-orang yang memilih menjadi vegetarian.</p>
                            <p>Meskipun terbuat dari bahan baku yang sama, keduanya memiliki kandungan nutrisi, rasa, dan bentuk yang berbeda.</p>
                            <p>Lalu, mana yang lebih sehat?</p>
                            <p><b>Kandungan nutrisi</b>></p>
                            <p>Melansir dari Healthline, meskipun kandungan nutrisinya serupa dalam beberapa hal, ada beberapa perbedaan antara keduanya.</p>
                            <p>Karena tempe biasanya dibuat dengan kacang-kacangan atau biji-bijian, tempe secara signifikan lebih kaya kalori, protein, dan serat.</p>
                            <p>Faktanya, hanya 3 ons (85 gram) tempe menyediakan 7 gram serat.</p>
                            <p>Angka ini telah memenuhi 28 persen asupan serat harian.</p>
                            <p>Sementara itu, tahu lebih rendah protein. Namun, tahu memiliki lebih sedikit kalori.</p>
                            <p>Meski begitu, tahu juga menawarkan sejumlah zat besi dan kalium.</p>
                            <p>Tahu juga memiliki kalsium dua kali lebih tinggi daripada tempe.</p>
                            <p>Kedua produk kedelai tersebut umumnya rendah sodium dan bebas kolesterol.</p>
                            <p>Di samping itu, inilah beberapa persamaan antara keduanya dalam hal kandungan nutrisi.</p>
                            <a>Manfaat tempe dan tahu bagi kesehatan</a>
                            <p><b>1. Kaya akan isoflavon</b>></p>
                            <p>Tempe dan tahu kaya akan fitoestrogen yang dikenal sebagai isoflavon.</p>
                            <p>Menurut studi berjudul “Interaction of phytoestrogens with estrogen receptors alpha and beta”, isoflavon adalah senyawa tanaman yang meniru struktur kimia dan efek estrogen, yakni hormon yang mendorong perkembangan seksual dan reproduksi.</p>
                            <p>Beberapa penelitian ilmiah menunjukkan, tahu dan tempe memiliki beberapa manfaat yang hampir sama, yakni dapat mengurangi risiko terkena kanker dan meningkatkan kesehatan jantung.</p>
                            <p>Dalam 3 ons (84 gram) tahu, terdiri atas 17-21 mg isoflavon. Sedangkan tempe menyediakan 10-38 mg dalam porsi yang sama.</p>
                            <p><b>2. Dapat mengurangi risiko penyakit jantung</b></p>
                            <p>Beberapa penelitian mengaitkan peningkatan asupan kedelai dengan penurunan risiko penyakit jantung karena efeknya pada kolesterol dan trigliserida.</p>
                            <p>Secara khusus, satu penelitian pada tikus berjudul “Hepatoprotective Effect of FermentedSoybean (Nutrient Enriched Soybean Tempeh) against Alcohol-Induced Liver Damage in Mice” menemukan bahwa tempe yang diperkaya nutrisi menurunkan kadar trigliserida dan kolesterol.</p>
                            <p>Tahu tampaknya memiliki efek yang sama.</p>
                            <p>Sebagai contoh, sebuah penelitian lain terhadap tikus berjudul “Tofu (soybean curd) lowers serum lipid levels and modulates hepatic gene expression involved in lipogenesis primarily through its protein, not isoflavone, component in rats” menunjukkan bahwa tahu secara signifikan menurunkan trigliserida dan kolesterol.</p>
                            <p>Selain itu, sebuah penelitian pada 45 pria berjudul “Effects of soy as tofu vs meat on lipoprotein concentrations” mencatat bahwa kadar kolesterol total dan trigliserida secara signifikan lebih rendah pada diet kaya tahu daripada diet kaya daging tanpa lemak.</p>
                            <a>Perbedaan kandungan</a>
                            <p>Satu perbedaan yang mencolok antara kedua olahan kedelai ini adalah bahwa tempe menyediakan prebiotik yang bermanfaat.</p>
                            <p>Prebiotik adalah serat alami yang tidak dapat dicerna, yang mendorong pertumbuhan bakteri sehat di saluran pencernaan.</p>
                            <p>Serat ini dapat membantu buang air besar secara teratur, mengurangi peradangan, menurunkan kadar kolesterol, dan bahkan meningkatkan daya ingat.</p>
                            <p>Kandungan prebiotik yang tinggi dalam tempe karena kandungan seratnya yang cukup tinggi.</p>
                            <p>Secara khusus, satu penelitian tabung berjudul “Evaluation of bean and soy tempeh influence on intestinal bacteria and estimation of antibacterial properties of bean tempeh” menemukan bahwa tempe merangsang pertumbuhan Bifidobacterium, yakni sejenis bakteri usus yang baik.</p>
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
                                    <img src="Main Page/assets/garlic.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span>
                                        <i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 18,
                                        2021
                                    </span>
                                </div>
                            </div>

                            <div class="post-title">
                                <a href="MainpageKes(1).php">6 Manfaat Black Garlic bagi Kesehatan</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/kurus.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 19,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageKes(2).php">Badan Kurus Tapi Double Chin, Kenali Penyebabnya</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/sepsis.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 20,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageKes(3).php">6 Bahaya Sepsis yang Perlu Diwaspadai</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/sendi.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 19,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageKes(4).php">5 Makanan yang Pantang bagi Penderita Nyeri Sendi</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/asma.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 17,
                                        2021</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageKes(5).php">Apakah Penderita Asma Rentan Terinfeksi Covid-19?</a>
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
