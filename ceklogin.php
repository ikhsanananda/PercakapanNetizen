<?php
include("config.php");

session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
    if(time()-$_SESSION["login_time_stamp"] >6000)  
    {
        session_unset();
        session_destroy();       
        header('Location:SignupLogin.php');
    }
    else 
    {
        header('Location:profil2.php');
    }
}
else
{
    header('Location:SignupLogin.php');
}
