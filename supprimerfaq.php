<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/supprimerfaq.css">
    <title>supprimer</title>
</head>

<body>
<?php
        require("header.php")
    ?>
    <div id="container">

        <form action="verification.php" method="POST">
            <h1>Supprimer</h1>

            <p>Etes vous sur de vouloirs supprimer cette question definitivement ?</p>

            <p><a href="FAQ.php" type="submit">supprimer</a></p>

        </form>
    </div>
</body>

</html>