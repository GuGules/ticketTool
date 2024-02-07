<?php
    session_reset();
    $_SESSION['isLoggedIn']=false;
    $_SESSION['ConnectedUser']="";
    header('Location: index.php');?>