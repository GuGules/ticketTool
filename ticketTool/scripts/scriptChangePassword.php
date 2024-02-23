
<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

include('../include/libConnexion.php');
include('../include/connectDB.php');
$exMdp = $_POST['actual_password'];
$Mdp1 = $_POST['new_password'];
$Mdp2 = $_POST['confirmed_password'];
if (checkPassword($bdd, $_SESSION['ConnectedUser'], $exMdp)) {
    if ($Mdp1 == $Mdp2) {
        changePassword($bdd, $_SESSION['ConnectedUser'], $Mdp1);
    }
}
header('Location:../accountSettings.php');
?>