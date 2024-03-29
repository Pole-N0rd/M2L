<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Mot de passe oubliée</title>
</head>
<body>
    <?php
        require("header.php");
    ?>
    <h1 class="title">Nouveau mot de passe</h1>
    <form action="index.php">
        <div>
            <label class="label" for="mdp">Mot de passe</label>
            <div class="control">
                <input class="input" type="password" placeholder="Entrer un mot de passe">
            </div>
        </div>
        <div>
            <label class="label" for="confirm_mdp">Confirmer mot de passe</label>
            <div class="control">
                <input class="input" type="password" placeholder="Confirmer votre mot de passe">
            </div>
        </div>
        <div>
            <input type="submit" value="Connexion">
        </div>
    </form>
</body>
</html>