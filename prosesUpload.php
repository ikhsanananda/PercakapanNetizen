<?php
    if(isset($_POST['unggah']))
    {
        $foto=$_FILES['gambar'];
        $cerita=$_FILES['kisah'];
        
        $fileFotoName=$_FILES['gambar']['name'];
        $fileCeritaName=$_FILES['kisah']['name'];
        
        $fileFotoTmpName=$_FILES['gambar']['tmp_name'];
        $fileCeritaTmpName=$_FILES['kisah']['tmp_name'];

        $fileFotoSize=$_FILES['gambar']['size'];
        $fileCeritaSize=$_FILES['kisah']['size'];

        $fileFotoError=$_FILES['gambar']['error'];
        $fileCeritaError=$_FILES['kisah']['error'];

        $fileFotoType=$_FILES['gambar']['type'];
        $fileCeritaType=$_FILES['kisah']['type'];
        
        $fileFotoExt=explode('.', $fileFotoName);
        $fileCeritaExt=explode('.', $fileCeritaName);

        $fileActualFotoExt=strtolower(end($fileFotoExt));
        $fileActualCeritaExt=strtolower(end($fileCeritaExt));

        $fileResetFotoExt=strtolower(reset($fileFotoExt));
        $fileResetCeritaExt=strtolower(reset($fileCeritaExt));

        $allowedFoto=array('jpg', 'jpeg', 'png');
        $allowedCerita=array('pdf', 'doc', 'docx');

        if(in_array($fileActualFotoExt, $allowedFoto) && in_array($fileActualCeritaExt, $allowedCerita))
        {
            if($fileFotoError===0 && $fileCeritaError===0)
            {
                if($fileFotoSize < 5000000000 && $fileCeritaSize < 5000000000)
                {
                    if($$fileResetFotoExt==$$fileResetCeritaExt)
                    {
                        $fileFotoNameNew=$fileFotoName.".".$fileActualFotoExt;
                        $fileCeritaNameNew=$fileCeritaName.".".$fileActualCeritaExt;

                        $fileFotoDestination='Share The Story/'.$fileFotoNameNew;
                        $fileCeritaDestination='Share The Story/'.$fileCeritaNameNew;

                        move_uploaded_file($fileFotoTmpName, $fileFotoDestination);
                        move_uploaded_file($fileCeritaTmpName, $fileCeritaDestination);

                        echo "<script>
                            window.location.href='index.php';
                            alert('Unggah Cerita Sukses! Segera Kami Verifikasi dan Publikasi');
                            </script>";
                    }
                    else
                    {
                        echo "<script>
                            window.location.href='index.php';
                            alert('Nama File Untuk Gambar dan Cerita Harus Sama');
                            </script>";
                    }
                }
                else
                {
                    echo "<script>
                window.location.href='ShareStory.php';
                alert('File Anda Terlalu Besar, Maksimal 500MB');
            </script>";
                }
            }
            else
            {
                echo "<script>
                window.location.href='ShareStory.php';
                alert('Error');
            </script>";
            }
        }
        else
        {
            echo "<script>
                window.location.href='ShareStory.php';
                alert('Tipe File Tidak Sesuai');
            </script>";
        }
    }
    elseif(isset($_POST['']))
    {
        ;
    }
?>
