<!DOCTYPE html>

<head>
    <title>Edit Profil | Percakapan Netizen</title>
    <link rel="stylesheet" href="./Profile-edit/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Main Page/css/all.css">
    <link rel="stylesheet" href="./Main Page/css/fonts.css">
</head>

<body>
    <!--nav-->
    <nav class="nav">
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="index.php"><img src="./Profile-edit/assets/logo/PN full color.png" alt="Logo"></a>
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
        </div>
    </nav>

    <!--title-->
    <div class="container">
        <!-- <div class="header"></div> -->
        <div class="avatar-edit">
            <div class="avatar-now">
                <h3>Foto Profil Sekarang</h3>
                <?php include('config.php'); 
                    
                    $nama=$_SESSION['username'];
                    $profil=pg_query("SELECT icon FROM DAFTAR_USER WHERE username='$nama'");
                    $val=pg_fetch_array($profil);
                ?>
                <img src="<?php echo $val['icon']; ?>" alt="Profile Picture">
            </div>
            <!-- ganti avatar -->
            <div class="change">
                <h3>Ganti Foto Profil</h3>
                <div class="gallery">
                    <div class="row">
                        <div class="opt">
                            <img src="Profile-edit/assets/avatar/B1.png" alt="Avatar1">
                            <a href="prosesProfil.php?foto=Profile-edit/assets/avatar/B1.png">
                                <button class="btn">Avatar 1</button>
                            </a>
                      </a>
                        </div>
                        <div class="opt">
                            <img src="Profile-edit/assets/avatar/R1.png" alt="Avatar6">
                            <a href="prosesProfil.php?foto=Profile-edit/assets/avatar/R1.png">
                                <button class="btn">Avatar 6</button>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="opt">
                            <img src="Profile-edit/assets/avatar/B2.png" alt="Avatar2">
                            <a href="prosesProfil.php?foto=Profile-edit/assets/avatar/B2.png">
                                <button class="btn">Avatar 2</button>
                            </a>
                        </div>
                        <div class="opt">
                            <img src="Profile-edit/assets/avatar/R2.png" alt="Avatar7">
                            <a href="prosesProfil.php?foto=Profile-edit/assets/avatar/R2.png">
                                <button class="btn">Avatar 7</button>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="opt">
                            <img src="Profile-edit/assets/avatar/B3.png" alt="Avatar3">
                            <a href="prosesProfil.php?foto=Profile-edit/assets/avatar/B3.png">
                                <button class="btn">Avatar 3</button>
                            </a>
                        </div>
                        <div class="opt">
                            <img src="Profile-edit/assets/avatar/R3.png" alt="Avatar8">
                            <a href="prosesProfil.php?foto=Profile-edit/assets/avatar/R3.png">
                                <button class="btn">Avatar 8</button>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="opt">
                            <img src="Profile-edit/assets/avatar/B4.png" alt="Avatar4">
                            <a href="prosesProfil.php?foto=Profile-edit/assets/avatar/B4.png">
                                <button class="btn">Avatar 4</button>
                            </a>
                        </div>
                        <div class="opt">
                            <img src="Profile-edit/assets/avatar/R4.png" alt="Avatar9">
                            <a href="prosesProfil.php?foto=Profile-edit/assets/avatar/R4.png">
                                <button class="btn">Avatar 9</button>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="opt">
                            <img src="Profile-edit/assets/avatar/B5.png" alt="Avatar5">
                            <a href="prosesProfil.php?foto=Profile-edit/assets/avatar/B5.png">
                                <button class="btn">Avatar 5</button>
                            </a>
                        </div>
                        <div class="opt">
                            <img src="Profile-edit/assets/avatar/R5.png" alt="Avatar10">
                            <a href="prosesProfil.php?foto=Profile-edit/assets/avatar/R5.png">
                                <button class="btn">Avatar 10</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form action="prosesUpdate.php" method="POST">
            <?php 
                $nama=$_SESSION['username'];
                $profil=pg_query("SELECT * FROM DAFTAR_USER WHERE username='$nama'");
                $val=pg_fetch_array($profil);
                echo $nama;
            ?>

            <h1>Nama Pengguna</h1>
                <input type="text" class="name" name="name" value="<?php echo $val['nama_lengkap'];?>" maxlength="25">
            <h3>Deskripsi:</h3>
                <textarea class="desc" name="desc" maxlength="250"><?php echo $val['deskripsi'];?></textarea>
            <h3>Ganti E-Mail:</h3>
                <input type="email" class="mail" name="e-mail" value="<?php echo $val['email'];?>" maxlength="250">
            <h3>Ganti Password:</h3>
            <p>
                <input type="password" class="opass" name="old-password" maxlength="250" placeholder="Masukan password lama">
            </p>
            <p>
                <input type="password" class="npass" name="new-password" maxlength="250" placeholder="Masukan password baru">
            </p>
            <p>
                <input type="password" class="npass" name="c-password" maxlength="250" placeholder="Masukan ulang password baru">
            </p>
            <p>
                <input type="submit" class="save" name="save" value="Simpan" alt="save"> 
                <input type="submit" class="cancel" name="cancel" value="Batal" alt="Batal">
            </p>
        </form>
    </div>
    <!-- </div> -->
</body>
