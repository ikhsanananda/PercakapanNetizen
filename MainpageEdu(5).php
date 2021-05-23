<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agar WhatsApp Tak Habiskan Memori HP ala Institut Teknologi Batam</title>

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
                                <img src="Main Page/assets/was.jpg" class="img" alt="blog1">
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
                            <a href="MainpageEdu(5).php">Agar WhatsApp Tak Habiskan Memori HP ala Institut Teknologi Batam</a>
                            <p>Salah satu media sosial (medsos) yang sering digunakan masyarakat Indonesia untuk mengirim pesan yakni aplikasi WhatsApp.</p>
                            <p>Tapi tanpa disadari, saat mengirim pesan baik berupa tulisan, gambar, video dan suara di Whatsapp, hal ini sering menghabiskan memori atau ruang penyimpanan di handphone.</p>
                            <p>Saking banyaknya data yang ada di aplikasi WhatsApp justru membuat kinerja handphone menjadi lamban.</p>
                            <p>Dilansir dari laman Institut Teknologi Batam (Iteba), ada cara mudah agar WhatsApp tak menghabiskan ruang penyimpanan handphone.</p>
                            <p><b>1. Matikan fitur auto download</b></p>
                            <p>Saat berkirim pesan dengan teman atau keluarga, kamu pasti sering mengirim atau menerima video, gambar dan suara.</p>
                            <p>Untuk menghemat memori handphone, ada beberapa hal yang bisa kamu lakukan. Salah satunya dengan mengontrol penyimpanan WhatsApp. Secara default, pesan foto dan video akan terunduh otomatis di WhatsApp.</p>
                            <p>Namun, kamu bisa menonaktifkannya secara manual melalui setting atau setelan. Ini langkah-langkahnya, klik setting, penggunaan data dan penyimpanan, unduh otomatis media, saat menggunakan data seluler atau Wi-Fi. Hilangkan semua tanda centang.</p>
                            <p>Dengan demikian, WhatsApp kamu tak lagi otomatis mengunduh video atau gambar yang dikirim oleh pengirim pesan.</p>
                            <p><b>2. Hapus pesan berukuran besar </b></p>
                            <p>Untuk menghapus chat berukuran besar, kamu bisa membuka menu setting dengan mengetuk tombol titik tiga vertikal di pojok kanan atas.</p>
                            <p>Pilih storage dan data, manage storage. Setelah itu, akan muncul daftar kontak atau grup dalam urutan yang paling banyak memakan memori handphone. Kamu bisa membersihkannya dari WhatsApp dengan klik bersihkan pesan.</p>
                            <p><b>3. Hapus riwayat panggilan</b></p>
                            <p>Selain menyortir pesan, kamu juga bisa menghapus riwayat panggilan untuk mencegah habisnya ruang penyimpanan karena WhatsApp.</p>
                            <p>Caranya, klik menu panggilan, kemudian tekan tombol titik tiga di atas, dan hapus log panggilan.</p>
                            <p><b>4. Aktifkan backup Google Drive atau iCloud</b></p>
                            <p>Umumnya, media pada WhatsApp, seperti video dan foto dicadangkan langsung ke memori internal. Perlu diingat bahwa mencadangkan file ke cloud membutuhkan daya baterai dan kuota data yang cukup besar. </p>
                            <p>Kamu bisa memilih back up over (cadangkan melalui), pilih antara WiFi atau seluler. </p>
                            <P><b>5. Kurangi membuka WhatsApp story</b></P>
                            <P>Seiring perkembangan teknologi, aplikasi WhatsApp juga memiliki fitur WhatsApp story.</P>
                            <p>Namun, ada hal yang perlu kamu ketahui bahwa WhatsApp story atau WhatsApp status yang kamu lihat akan terunduh dan tersimpan di memori internal ponsel. Jadi, sebaiknya kamu meminimalisir membuka WhatsApp story.</p>
                            <p><b>6. Gunakan aplikasi cleaner</b></p>
                            <p>Untuk mencegah penyimpanan atau memori penuh karena WhatsApp, kamu juga bisa download salah satu aplikasi cleaner cache di Android.</p>
                            <p>Aplikasi-aplikasi tersebut dapat membersihkan memori maupun RAM di smart phone milikmu.</p>
                            <p>Itulah 6 cara mudah mencegah WhatsApp menghabiskan memori penyimpanan handphone. Jika kamu rutin membersihkan data yang tidak perlu di aplikasi WhatApp, paling tidak memori di handphone tidak cepat penuh dan kinerjanya selalu bisa diandalkan.</p>

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