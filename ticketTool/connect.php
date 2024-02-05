<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirection en cours</title>
    <link rel="icon" href="favicon.ico">
</head>

<body>
    <?php
    include("include/connectDB.php");
    include('include/libConnexion.php');
    if (isset($_GET['username']) && isset($_GET['password'])) {
        echo 'je rentre';
        if (Login($bdd, $_GET['username'], $_GET['password'])) {
            echo 'j ai testé';
            header('Location: connected.php');
            
        } else {
            echo 'j ai testé';
            echo 'Mot de passe incorrect';
        }
    } else {
        echo 'Aucun identifiant saisi';
    }
    ?>

</body>

</html>