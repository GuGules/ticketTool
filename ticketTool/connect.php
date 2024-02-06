<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/head.php'); ?>
</head>

<body>
    <?php
    include("include/connectDB.php");
    include('include/libConnexion.php');
    if (isset($_GET['username']) && isset($_GET['password'])) {
        //echo 'je rentre';
        if (Login($bdd, $_GET['username'], $_GET['password'])) {
            echo 'j ai testé';
            header('Location: menu.php');
        } else {
            header('Location:index.php?error=i_log');
        }
    } else {
        header('Location: index.php?error=emp_log');
    }
    ?>

</body>

</html>