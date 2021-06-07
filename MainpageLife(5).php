<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>7 Gejala Asam Urat yang Tak Boleh Diabaikan</title>

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
                                <img src="Main Page/assets/urat.jpg" class="img" alt="blog1">
                            </div>
                            <div class="post-info flex-row">
                                <span><i class="fas fa-user text-gray"></i>&nbsp;&nbsp;Admin</span>
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;May 21, 2021</span>
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
                            <a href="MainpageLife(5).php">7 Gejala Asam Urat yang Tak Boleh Diabaikan</a>
                            <p>Penyakit asam urat (gout) adalah salah satu bentuk artritis yang menyebabkan serangan peradangan yang parah dan tiba-tiba.</p>    
                            <p>Penyakit asam urat terjadi ketika kadar asam urat di dalam tubuh terlalu tinggi.</p>
                            <p>Kondisi ini menyebabkan pembengkakan pada persendian, terutama di kaki dan jempol kaki.</p>
                            <p>Untuk bisa menyembuhkan asam urat, kita harus terlebih dahulu bisa memastikan bahwa kita mengidap penyakit ini. Sayangnya, gejala asam urat tidak selalu jelas.</p>
                            <p>Bahkan, menurut ahli reumatologi dari Arthritis Associates di Hixson, Tennessee, AS, Joseph Huffstutter, MD, kepada creaky joints, di kalangan para ahli penyakit asam urat sering dianggap sebagai "peniru" yang hebat karena bisa muncul lewat berbagai cara.</p>
                            <p>Melakukan tes asam urat ketika mengalami dugaan gejala asam urat bisa menjadi salah satu cara untuk mengetahui apakah kadar asam urat normal atau tidak.</p>
                            <p>Meski gejalanya tak selalu jelas, beberapa gejala asam urat yang bisa diamati antara lain:</p>
                            <a>1. Rasa sakit pada jempol kaki</a>
                            <p>Ini adalah ciri klasik serangan asam urat dan dianggap sebagai gejala yang paling jelas.</p>
                            <p>Sebagian kejadian asam urat berasal dari makanan, tetapi sebagian besar adalah produk sampingan dari metabolisme normal.</p>
                            <p>Jika mencapai titik di mana tubuh kita sudah tidak lagi bisa memecah asam urat dengan optimal, maka asam urat akan menumpuk dan membentuk kristal.</p>
                            <p>Kristal tersebut sering kali berpindah ke jari kaki dan dianggap oleh tubuh sebagai penyerang asing.</p>
                            <p>Itulah yang menyebabkan rasa sakit menyiksa di area kaki yang disertai rasa hangat dan kemerahan.</p>
                            <p>Bahkan, ujung jari kaki menyentuh permukaan lembut saja bisa terasa sangat menyakitkan.</p>
                            <a>2. Nyeri pada lutut, pergelangan atau tangan, dan/atau siku</a>
                            <p>Meskipun kristal asam urat cenderung mengendap di dekat jempol kaki, namun kristal tersebut bisa saja terbentuk di persendian mana pun di tubuh.</p>
                            <p>Artinya, rasa sakit parah yang tidak bisa dijelaskan itu bisa saja terasa di sendi mana pun dan menjadi tanda asam urat.</p>
                            <p>Beberapa orang hanya mengalami nyeri pada satu sendi, yakni lutut kiri. Tetapi, sekitar 25 persen pasien asam urat memiliki gejala poliartikular atau menyerang lebih dari satu sendi pada satu waktu.</p>
                            <p>Ketika asam urat muncul di beberapa sendi, maka penyakit ini akan lebih sulit untuk didiagnosis karena dapat meniru kondisi lain, seperti rematik.</p>
                            <a>3. Nyeri intens di malam hari</a>
                            <p>Serangan asam urat lebih mungkin terjadi pada malam hari, antara tengah malam hingga jam 08.00, dibandingkan dengan siang hari.</p>
                            <p>Hal ini disebabkan adanya beberapa faktor berbeda, termasuk suhu tubuh yang lebih rendah dan kecenderungan dehidrasi selama tidur. Kondisi tersebut memungkinkan asam urat lebih mudah menumpuk.</p>
                            <a>4. Nyeri ketika serangan asam urat semakin parah</a>
                            <p>Jika setiap pagi kita bangun dengan lutut yang kaku dan nyeri, ada kemungkinan asam urat belum terobati sepenuhnya.</p>
                            <p>Sebab, nyeri terkait asam urat cenderung berubah dari tidak ada sama sekali atau nol menjadi 60 dalam waktu kurang dari 24 jam.</p>
                            <p>Beberapa orang akan pergi tidur dengan perasaan baik-baik saja, kemudian bangun di tengah malam dengan rasa sakit yang begitu hebat.</p>
                            <p>Penyakit asam urat cenderung menyerang sebagai rasa sakit yang mereda dalam beberapa hari hingga minggu.</p>
                            <p>Pada awalnya, penderitanya bisa saja melalui beberapa bulan atau tahun di antara serangan asam urat satu dan lainnya.</p>
                            <p>Tapi, jika tidak terobati, serangan asam urat bisa terjadi lebih sering dan lebih intens serta memengaruhi lebih banyak sendi pada saat yang bersamaan.</p>
                            <p>Selama periode asam urat satu dan lainnya, sering kali penderitanya tidak mengalami gejala dan merasa baik-baik saja. Pola ini cenderung mengarah pada asam urat dibandingkan jenis arthritis lainnya.</p>
                            <a>5. Kelelahan atau kurang energi</a>
                            <p>Selama serangan asam urat, baik pernah mengalami atau pun pertama kali mengalaminya, kita mungkin akan merasa tubuh sangat lelah sehingga mengingatkan kita pada kondisi ketika mengalami flu.</p>
                            <p>Pada saat tersebut, kita juga mungkin mengalami demam dan nyeri otot.</p>
                            <a>6. Ada benjolan aneh di sekitar sendi</a>
                            <p>Benjolan ini disebut tophi. Tophi sebenarnya adalah gundukan kristal asam urat.</p>
                            <p>Tophi paling umum terjadi pada pasien asam urat kronis. Jadi, kita mungkin akan merasakan nyeri jauh sebelum tophi muncul.</p>
                            <p>Dengan perawatan yang tepat, tophi dapat larut sehingga dapat dihilangkan.</p>
                            <a>7. Sulit menggerakkan sendi</a>
                            <p>Menurut Mayo Clinic, seiring berkembangnya kondisi asam urat, nantinya kita mungkin akan kesulitan atau tidak bisa menggerakkan sendi secara normal.</p>
                            <a>Komplikasi asam urat</a>
                            <p><b>Asam urat berulang</b></p>
                            <p>Beberapa orang mungkin tidak pernah lagi merasakan gejala asam urat. Namun, sebagian lainnya mungkin akan merasakannya beberapa kali dalam setahun.</p>
                            <p>Konsumsi obat dapat membantu mencegah serangan asam urat pada penderita asam urat berulang.</p>
                            <p>Jika tidak ditangani, asam urat dapat menyebabkan erosi dan kerusakan sendi.</p>
                            <p><b>Asam urat lanjut</b></p>
                            <p>Asam urat yang tidak diobati dapat menyebabkan deposit kristal urat yang terbentuk di bawah kulit yang berbentuk nodul atau tophi.</p>
                            <p>Tophi dapat berkembang di beberapa area tubuh, seperti jari, tangan, kaki, siku, atau tendon Achiles di sepanjang bagian belakang pergelangan kaki.</p>
                            <p>Meski biasanya tidak menyakitkan, tophi bisa menjadi bengkak dan lunak selama serangan asam urat terjadi.</p>
                            <p><b>Batu ginjal</b></p>
                            <p>Kristal tersebut dapat terkumpul di saluran kemih penderita asam urat dan menyebabkan batu ginjal.</p>
                            <p>Pengobatan yang tepat dapat membantu mengurangi risiko batu ginjal.</p>
                            <a>Kapan harus ke dokter</a>
                            <p>Asam urat yang tidak terobati bisa menimbulkan nyeri yang lebih parah dan kerusakan sendi.</p>
                            <p>Jika mengalami gejala seperti di atas, segera hubungi dokter. Jika mengalami demam serta sendi yang panas dan meradang, itu bisa merupakan tanda infeksi sehingga dianjurkan untuk segera mendapatkan perawatan medis.</p>
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
                                    <img src="Main Page/assets/ketimun.jpg" class="img" alt="blog1">
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
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
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
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
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
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
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
                                    <span><button><a href="ceklogin.php"><i class="far fa-heart text-gray"></i></a></button>&nbsp;&nbsp;Like</span>
                                </div>
                            </div>
                            <div class="post-title">
                                <a href="MainpageLife(5).php">7 Gejala Asam Urat yang Tak Boleh Diabaikan</a>
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
