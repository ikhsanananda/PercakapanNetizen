<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Awas, Dehidrasi Bisa Sebabkan Gangguan Kecemasan</title>

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
                                <img src="Main Page/assets/dehidrasi.jpg" class="img" alt="blog1">
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
                        <a href="MainpageKes(10).php">Awas, Dehidrasi Bisa Sebabkan Gangguan Kecemasan</a>
                            <p>Minum banyak air sangat baik bagi kesehatan.</p>
                            <p>Merangkum dari Healthline, minum air yang stabil membuat sirkulasi mengalir dengan lancar, membantu pencernaan dan penurunan berat badan, memudahkan gerakan sendi, serta membantu tubuh menyerap nutrisi secara optimal.</p>
                            <p>Di samping itu, minum cukup air ternyata juga bisa berdampak pada kesehatan mental.</p>
                            <p>Sebuah penelitian berjudul “Narrative Review of Hydration and Selected Health Outcomes in the General Population” menunjukkan bahwa air penting untuk menjaga kesehatan mental seseorang.</p>
                            <p>Dehidrasi dapat meningkatkan risiko kecemasan, depresi, dan gangguan kesehatan mental lainnya.</p>
                            <p>Berbagai penelitian menunjukkan hubungan antara dehidrasi dan risiko kecemasan yang lebih tinggi.</p>
                            <p>Dalam sebagian besar studi ini, efek dehidrasi pada tingkat kecemasan ringan tetapi signifikan.</p>
                            <p>Berikut ini beberapa manfaat dari konsumsi air yang cukup terhadap kesehatan mental seseorang.</p>
                            <p><b>1. Menurunkan risiko kecemasan dan depresi</b>></p>
                            <p>Sebuah studi berjudul “Drinking plain water is associated with decreased risk of depression and anxiety in adults: Results from a large cross-sectional study” pada 2018 menunjukkan bahwa orang yang minum lebih banyak air memiliki risiko kecemasan depresi yang lebih rendah daripada mereka yang sedikit mengonsumsi air.</p>
                            <p>Dalam studi terhadap 3.000 orang tersebut mereka menyimpulkan bahwa ada kaitan antara dehidrasi dengan tingkat kecemasan seseorang.</p>
                            <p><b>2. Suasana hati membaik dengan lebih banyak asupan air</b>></p>
                            <p>Tempe dan tahu kaya akan fitoestrogen yang dikenal sebagai isoflavon.</p>
                            <p>Menurut studi berjudul “Interaction of phytoestrogens with estrogen receptors alpha and beta”, isoflavon adalah senyawa tanaman yang meniru struktur kimia dan efek estrogen, yakni hormon yang mendorong perkembangan seksual dan reproduksi.</p>
                            <p>Beberapa penelitian ilmiah menunjukkan, tahu dan tempe memiliki beberapa manfaat yang hampir sama, yakni dapat mengurangi risiko terkena kanker dan meningkatkan kesehatan jantung.</p>
                            <p>Dalam 3 ons (84 gram) tahu, terdiri atas 17-21 mg isoflavon. Sedangkan tempe menyediakan 10-38 mg dalam porsi yang sama.</p>
                            <p><b>2. Dapat mengurangi risiko penyakit jantung</b></p>
                            <p>Dalam studi terbatas pada tahun 2014 berjudul “Effects of Changes in Water Intake on Mood of High and Low Drinkers”, peneliti mengeksplorasi bagaimaa pengaruh suasana hati terhadap asupan air seseorang.</p>
                            <p>Mereka pun menemukan bahwa orang yang biasanya minum banyak air merasa kurang tenang, kurang puas, dan lebih tegang saat asupan airnya berkurang.</p>
                            <p>Ketika peneliti meningkatkan asupan air peserta, orang-orang dalam penelitian ini merasakan suasana hati yang lebih baik.</p>
                            <p><b>3. Ketegangan meningkat ketika dehidrasi</b></p>
                            <p>Studi pada tahun 2015 berjudul “Habitual total water intake and dimensions of mood in healthy young women” melacak suasana hati dan asupan air total di antara wanita yang sehat.</p>
                            <p>Mereka menemukan bahwa asupan air yang lebih rendah dikaitkan dengan ketegangan, depresi, dan kebingungan yang lebih besar.</p>
                            <p>Selain itu, penelitian lain berjudul “Mild dehydration impairs cognitive performance and mood of men” menemukan hubungan serupa antara peningkatan ketegangan dan dehidrasi pada pria sehat.</p>
                            <p>Dari sini dapat dilihat bahwa dehidrasi dapat meningkatkan ketegangan, baik pada pria maupun wanita.</p>
                            <a>Tanda-tanda dehidrasi</a>
                            <p>Peningkatan kecemasan adalah salah satu dari banyak indikasi seseorang tidak mendapatkan cukup air putih.</p>
                            <p>Berikut ini beberapa tanda ketika seseorang mengalami dehidrasi.</p>
                            <p>
                                <ul>
                                    <li>haus</li>
                                    <li>mulut kering</li>
                                    <li>perubahan kulit, termasuk kekeringan, kemerahan, atau hilangnya turgor</li>
                                    <li>urin berwarna kuning tua atau lebih gelap</li>
                                    <li>sembelit</li>
                                    <li>tekanan darah tinggi</li>
                                    <li>detak jantung cepat</li>
                                    <li>mengantuk atau kelelahan</li>
                                    <li>sakit kepala atau mual
                                    </li>
                                </ul>
                            </p>
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
