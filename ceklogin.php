<?php

session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
    if(time()-$_SESSION["login_time_stamp"] >600)  
    {
        session_unset();
        session_destroy();
        header('Location:SignupLogin.php');
    }
    else 
    {
        header('Location:FavouriteNews.html');
    }
}
else
{
    header('Location:SignupLogin.php');
}
