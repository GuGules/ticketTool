
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

include('include/libConnexion.php');
include('include/connectDB.php');
$exMdp = $_GET['actual_password'];
$Mdp1 = $_GET['new_password'];
$Mdp2 = $_GET['confirmed_password'];
if (checkPassword($bdd, $_SESSION['ConnectedUser'], $exMdp)) {
    if ($Mdp1 == $Mdp2) {
        changePassword($bdd, $_SESSION['ConnectedUser'], $Mdp1);
    }
}
header('Location:accountSettings.php');
?>