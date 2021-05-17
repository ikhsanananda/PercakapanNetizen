<?php

session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
    header('Location:FavouriteNews.html');
}
else
{
    header('Location:SignupLogin.php');
}