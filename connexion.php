<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Inscription</title>
</head>
<body>
    <?php
        require("header.php")
    ?>
    <h1 class="title">Connexion</h1>
    <form action="index.php">
        <div class="field">
            <label class="label" for="identifiant">Identifiant</label>
            <div class="control">
                <input class="input" type="text" placeholder="Entrer votre identifiant">
            </div>
        </div>
        <div>
            <label class="label" for="mdp">Mot de passe</label>
            <div class="control">
                <input class="input" type="password" placeholder="Entrer votre mot de passe">
            </div>
        </div>
        <div>
            <a href="">Mot de passe oublié ?</a>
            <div style="text-align: right; margin-right : 5%;">
                <input type="submit" value="Connexion">
            </div>
        </div>
    </form>
</body>
</html>