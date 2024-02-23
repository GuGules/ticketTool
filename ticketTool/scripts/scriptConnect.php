<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('../include/head.php'); ?>
</head>

<body>
    <?php
    include("../include/connectDB.php");
    include('../include/libConnexion.php');
    if (isset($_POST['username']) && isset($_POST['password'])) {
        echo 'je rentre';
        if (Login($bdd, $_POST['username'], $_POST['password'])) {
            echo 'j ai testé';
            header('Location: ../menu.php');
        } else {
            header('Location:../index.php?error=i_log');
        }
    } else {
        header('Location: ../index.php?error=emp_log');
    }
    ?>

</body>

</html>