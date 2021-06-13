<!DOCTYPE html>

<head>
    <title>Yuk Kenalan | Percakapan Netizen</title>
    <link rel="stylesheet" href="./Contact Us/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Main Page/css/all.css">
    <link rel="stylesheet" href="./Main Page/css/fonts.css">
</head>

<body>
    <!--nav-->
    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="index.php"><img src="PN full color.png" alt="Logo"></a>          
            </div>

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
    </nav>

    <!--title-->
    <div class="container">
        <div class="header">
            <h1>Anggota Percakapan Netizen</h1>
            <hr>
        </div>

        <div class="container-anggota">
            <div class="anggota">
                <img src="./contact us/assets/Asmi.jpeg" alt="Foto Asmi">
                <h2>Asmi Devi Azizah</h2>
                <ul>
                    <li>G64190009</li>
                    <li>Ilmu Komputer</li>
                </ul>
            </div>

            <div class="anggota">
                <img src="./contact us/assets/Ikhsan.jpeg" alt="Foto Ikhsan">
                <h2>Muhammad Ikhsan Ananda</h2>
                <ul>
                    <li>G64190032</li>
                    <li>Ilmu Komputer</li>
                </ul>
            </div>

            <div class="anggota">
                <img src="./contact us/assets/Dhanti.jpeg" alt="Foto Dhanti">
                <h2>Ramadhanti Nisa P.</h2>
                <ul>
                    <li>G64190092</li>
                    <li>Ilmu Komputer</li>
                </ul>
            </div>

        </div>
    </div>
</body>