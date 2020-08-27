<?php 
  session_start();
if (isset($_SESSION['login']))
{
    echo 'Bonjour ' . $_SESSION['login'];
}else{
    header('location:login.php');
}
?> 