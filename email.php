<?php
    if(isset($_POST['submit']))
    {
        $messageSubject="Selamat datang di Percakapan Netizen!";
        $message="Halo, Sahabat!\nTerima kasih ya atas kepercayaan dan dukungan anda terhadap platfom kami. Jaga semangat anda ya dan tentunya jangan lupa untuk bagikan cerita kamu pada platform kami. Cerita kamu ialah kunci untuk kamu menyalurkan dan mengekspresikan setiap hal yang sedang kamu pikirkan!\nTerima Kasih Yaa!";
        $userEmail=$_POST['email']; 

        $to=$userEmail;
        $body=""; 
        $from="percakapannetizen@gmail.com";

        $body .= "From: ".$from."\r\n";
        $body .= "Email: ".$to."\r\n";
        //$body .= "Message: ".$message."\r\n";

        mail($to, $messageSubject, $message, $body);
        echo "<script>
                window.location.href='index.php';
                alert('Terima Kasih ya!');
            </script>";
        header("Location:index.php");
    }
?>