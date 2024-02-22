
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

include('../include/libBDD.php');
include('../include/connectDB.php');
include('../include/head.php');
include('../include/libConnexion.php');


$Mdp1 = $_POST['password'];
$Mdp2 = $_POST['c_password'];
$id = $_POST['id'];
$o_u = getUsername($bdd,$id);
if ($_SESSION['isLoggedIn']==true && $_SESSION['adminMode']==true) {
    if (isset($_POST['username']) and $_POST['username'] !== $o_u){
        $op = changeUsername($bdd, $_POST['username'],$id);
        $link = 'Location: ../admin/accounts.php?success='.$op.'&pwsuccess=';
    }
    if (isset($Mdp1)){
        if (isset($Mdp2) and $Mdp1==$Mdp2){
            $op2 = changePassword($bdd,$_SESSION['username'],$Mdp1);
            $link = $link.$op2;
        }else {
            header('Location: ../admin/editProfile.php?idUser='.$id.'&error=pw');
        }
    }
    header($link);
} else {
    header('Location:../menu.php');
}
?>