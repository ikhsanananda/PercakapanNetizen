<?php

if(isset($_POST['request']))
{
    $foto=$_FILES['gambar'];
    $kisah=$_FILES['cerita'];

    $fileFotoName=$_FILES['gambar']['name'];
    $fileKisahName=$_FILES['cerita']['name'];

    $fileFotoTmpName=$_FILES['gambar']['tmp_name'];
    $fileKisahTmpName=$_FILES['cerita']['tmp_name'];

    $fileFotoSize=$_FILES['gambar']['size'];
    $fileKisahSize=$_FILES['cerita']['size'];

    $fileFotoError=$_FILES['gambar']['error'];
    $fileKisahError=$_FILES['cerita']['error'];

    $fileFotoType=$_FILES['gambar']['type'];
    $fileKisahType=$_FILES['cerita']['type'];

    $fileFotoExt=explode('.', $fileFotoName);
    $fileKisahExt=explode('.', $fileKisahName);

    $fileActualFotoExt = strtolower(end($fileFotoExt));
    $fileActualKisahExt = strtolower(end($fileKisahExt));

    $fileAwalFotoExt = strtolower(reset($fileFotoExt));
    $fileAwalKisahExt = strtolower(reset($fileKisahExt));

    $allowedFoto = array('jpg', 'png', 'pdf', 'jpeg');
    $allowedKisah = array('docx', 'doc', 'pdf');

    if($fileAwalFotoExt==$fileAwalKisahExt)
    {
        if(in_array($fileActualFotoExt, $allowedFoto) and in_array($fileActualKisahExt, $allowedKisah))
        {
            if($fileFotoError===0 and $fileKisahError===0)
            {
                if($fileFotoSize<5000000 and $fileKisahSize<5000000)
                {
                    $fileFotoNameNew=$fileFotoName.".".$fileActualFotoExt;
                    $fileKisahNameNew=$fileKisahName.".".$fileActualKisahExt;

                    $fileKisahDestination='file/'.$fileKisahNameNew;
                    $fileFotoDestination='file/'.$fileFotoNameNew;

                    move_uploaded_file($fileKisahTmpName, $fileKisahDestination);
                    move_uploaded_file($fileFotoTmpName, $fileFotoDestination);
                    header("Location: index.php?uploadsuccess");
                }
                else
                {
                    echo "file anda terlalu besar"; 
                }
            }
            else
            {
                echo "eror saat upload file";
            }
        }
        else
        {
            echo "file harus berupa jpg atau jpeg atau png";
        }
    }
    else
    {
        echo "nama kedua file harus sama";
    }

}