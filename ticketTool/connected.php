<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connecté</title>
</head>
<body>
    <?php
        include("include/BDDAccess.php");
        echo $user->isLoggedIn;
    ?>
</body>
</html>