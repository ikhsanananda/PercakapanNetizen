<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>4 Jenis Ikan untuk Pempek, Tidak Cuma Ikan Tenggiri</title>

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
                                <img src="Main Page/assets/pempek.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 17, 2021</span>
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
                            <a href="MainpageFood.php">4 Jenis Ikan untuk Pempek, Tidak Cuma Ikan Tenggiri</a>
                            <p>Ikan merupakan bahan utama untuk membuat pempek. Namun tak semua ikan bisa digunakan untuk membuat pempek.</p>
                            <p>Ada jenis ikan tertentu yang cocok digunakan untuk membuat pempek. Rata-rata ialah ikan yang memiliki tekstur daging lengket.</p>
                            <p>Chef Gerry Rudy terbitan PT Gramedia Pustaka turut membagikan beberapa jenis ikan untuk membuat pempek. Berikut uraiannya.</p>
                            <a>1. Ikan belida</a>
                            <p>Ikan belida bisa dibilang sebagai ikan sungai terbaik yang cocok untuk membuat pempek. Konon, masyarakat Palembang pun menggunakan ikan ini untuk membuat pempek.</p>
                            <p>Sayangnya, ikan belida cukup langka, harganya pun terbilang mahal. Jadi, beberapa masyarakat memilih untuk menggunakan jenis ikan lainnya.</p>
                            <a>2. Ikan tenggiri</a>
                            <p>
                                <div>
                                    <img src="Main Page/assets/ikan1.jpg" class="img" alt="blog1">
                                </div>
                            </p>
                            <p>Salah satu jenis ikan untuk pempek yang sering digunakan yaitu ikan tenggiri.</p>
                            <p>Ikan tenggiri memiliki tekstur daging yang lembut dan lengket, sehingga dapat membuat pempek lebih kenyal.</p>
                            <p>Selain pempek, ikan tenggiri juga digunakan untuk membuat otak-otak, siomai, ataupun kerupuk. Rasanya yang gurih membuat hidangan makin lezat.</p>
                            <a>3. Ikan gabus</a>
                            <p>
                                <div>
                                    <img src="Main Page/assets/ikan2.jpg" class="img" alt="blog1">
                                </div>
                            </p>
                            <p>Ikan gabus bisa menjadi alternatif pengganti ikan tenggiri atau ikan belinda.</p>
                            <p>Namun cita rasa ikan gabus cenderung tawar, sehingga kamu perlu mencampurkan dengan jenis ikan lainnya, misalnya ikan tenggiri.</p>
                            <p>Gunakan perbandingan 1:1 agar rasa dan tekstur pempek sama seperti pempek kebanyakan.</p>
                            <a>4. Ikan kakap merah</a>
                            <p>
                                <div>
                                    <img src="Main Page/assets/ikan3.jpg" class="img" alt="blog1">
                                </div>
                            </p>
                            <p>Ikan kakap merah merupakan salah satu jenis ikan laut yang cocok untuk membuat pempek. Namun, ikan ini memiliki bau yang lebih amis daripada ikan lainnya.</p>
                            <p>Untuk mengurangi baunya, pilihlah ikan kakap merah yang masih segar. Selanjutnya, haluskan filet ikan kakap lalu giling hingga halus dan gunakan untuk membuat pempek.</p>
                            <p>Selain keempat ikan di atas, kamu pun dapat menggunakan ikan tongkol atau ikan tuna.</p>
                            <p>Bahkan bisa juga menggunakan ikan lele atau ikan lainnya selama tekstur dagingnya lembut dan lengket.</p>
                            <p>Metode 3D printing paling sering digunakan untuk membuat bentuk kompleks dan kustomisasi massal yang disesuaikan secara digital.
                            </p>
                            <p>Proses pembuatan produk yang dilakukan oleh perusahaan Carbon, yaitu Digital Light Synthesis, berbeda dari kebanyakan 3D printing.
                            </p>
                            <p>Digital Light Synthesis memancarkan sinar ultraviolet secara hati-hati ke dalam kumpulan tipis resin cair yang mengeras dalam cahaya.
                            </p>
                            <p>Saat produk terbentuk, secara bertahap bahan akan terangkat dan resin baru mengeras. Hasilnya diklaim menjadi bahan yang lebih konsisten dan kuat.
                            </p>
                            <p>3D printing mulai mendapat perhatian selama pandemi, ketika perusahaan dan rumah tangga menganggap teknologi tersebut berguna untuk memproduksi peralatan pelindung pribadi seperti pelindung wajah (face shield).
                            </p>
                            <p>
                                <div>
                                    <img src="Main Page/assets/sepatu2.jpg" class="img" alt="blog1">
                                </div>
                            </p>
                            <p>Adidas dan Carbon mengevaluasi 5 juta kemungkinan struktur kisi sebelum menetapkan pola dasi kupu-kupu untuk sepatu 4DFWD.
                            </p>
                            <p>Kedua kolaborator menguji desain sepatu tersebut dengan atlet lari, serta para ahli di University of Calgary dan University of Arizona.
                            </p>
                            <p>Adidas 4DFWD diprediksi akan hadir di pasaran mulai 1 Juli dengan harga sekitar 240 dollar AS atau setara Rp 3,4 juta.
                            </p>
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
                                    <img src="Main Page/assets/bakwan.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span>
                                        <i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021
                                    </span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>

                            <div class="post-title">
                                <a href="MainpageFood(1).php">Cara Goreng Bakwan yang Benar agar Tidak Lembek dan Serap Minyak</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="300">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/gorpis.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 20,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageFood(2).php">5 Cara Membuat Pisang Goreng agar Renyah Tahan Lama dan Tidak Keras</a>
                            </div>
                        </div>
                        <div class="post-content" data-aos="flip-up" data-aos-delay="400">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/warkop.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageFood(3).php">Kedai Kopi Tempati Rumah Adat Usia 200 Tahun, Ada di Pematang Siantar</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="500">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/martabak.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 22,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageFood(4).php">5 Cara Membuat Martabak Manis Berpori yang Lembut ala Penjual</a>
                            </div>
                        </div>

                        <div class="post-content" data-aos="flip-up" data-aos-delay="600">
                            <div class="post-image">
                                <div>
                                    <img src="Main Page/assets/mie.jpg" class="img" alt="blog1">
                                </div>
                                <div class="post-info flex-row">
                                    <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21,
                                        2021</span>
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageFood(5).php">Resep Mie Jawa Godog, Hidangan Berkuah untuk Makan Malam</a>
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
