<?php
    session_destroy();
    session_start();
    $_SESSION['isLoggedIn']=false;
    $_SESSION['ConnectedUser']="";
    header('Location: ../index.php');?>