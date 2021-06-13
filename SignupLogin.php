<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Sign-Up and Log-In Form/style.css" />
    <title>Sudah Memiliki Akun?</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="prosesLogin.php" method="POST" class="sign-in-form">
                    <h2 class="title">Masuk ke Akun Anda</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" required="required"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="passwordorg" required="required"/>
                    </div>
                    <input type="submit" value="Login" name="masuk" class="btn solid" />
                </form>

                <form action="prosesSignup.php" method="POST" class="sign-up-form">
                    <h2 class="title">Daftarkan Diri Anda</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" required="required"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" required="required"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="passwordorg" required="required"/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Confirm Password" name="cpassword" required="required"/>
                    </div>
                    <input type="submit" class="btn" value="Sign Up" name="daftar" />
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Anda Belum Memiliki Akun?</h3>
                    <p>
                        Yuk, Bergabung bersama kami dan nikmati setiap fitunya!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
              Daftar
            </button>
                </div>
                <img src="Sign-Up and Log-In Form/img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Anda Sudah Memiliki Akun?</h3>
                    <p>
                        Masuk ke akun anda dan nikmati petualangan anda!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
              Masuk
            </button>
                </div>
                <img src="Sign-Up and Log-In Form/img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="Sign-Up and Log-In Form/app.js"></script>
</body>

</html>