<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <title>Share The Story</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <form action="prosesUpload.php" method="POST" class="sign-in-form" enctype="multipart/form-data">
                    <h2 class="title">Share The Story</h2>

                    <div class="input-field">
                        <i class="fa fa-camera-retro" aria-hidden="true"></i>
                        <label class="file">
                          <input type="file" name="gambar" required="required">
                          <span class="file-custom"></span>
                        </label>
                    </div>
                
                    <div class="input-field">
                        <i class="fa fa-file" aria-hidden="true"></i>
                        <label class="file">
                          <input type="file" name="cerita" required="required">
                          <span class="file-custom"></span>
                        </label>
                    </div>

                    <input type="submit" value="Request" name="request" class="btn solid" />
                </form>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Siap untuk cerita?</h3>
                    <p>
                        Ayo bagikan kisah anda!
                    </p>
                </div>

                <img src="img/register.svg" class="image" alt="" />

            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>