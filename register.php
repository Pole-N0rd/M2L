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
    <header role="header">
        <nav class="menu" role="navigation">
            <div class="inner">
                <div class="m-left">
                    <a href="#" class="m-link">Accueil</a>
                    <a href="#" class="m-link">FAQ</a>
                </div>
                <div class="m-right">
                    <a href="#" class="m-link">Se connecter</a>
                    <a href="#" class="m-link">S'inscrire</a>
                </div>
        </nav>
    </header>
    <h1 class="title">Inscription</h1>
    <form action="index.php">
        <div class="field">
            <label class="label" for="identifiant">Identifiant</label>
            <div class="control">
                <input class="input" type="text" placeholder="Entrer votre identifiant">
            </div>
        </div>
        <div>
            <label class="label" for="mail">Nom</label>
            <div class="control">
                <input class="input" type="email" placeholder="Entrer votre mail">
            </div>
        </div>
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
            <label class="label" for="ligue-select">Ligue</label>
            <div class="select">
                <select name="ligue" id="ligue-select">
                    <option value="">Choisissez une ligue</option>
                    <option value="athlétisme">Athlétisme</option>
                    <option value="football">Football</option>
                    <option value="escrime">Escrime</option>
                    <option value="rugby">Rugby</option>
                    <option value="volley">Volley</option>
                </select>
            </div>
        </div>
        <div>
            <a href="">Condition générale d'utilisation
                <input type="checkbox" name="CGU" id="CGU_agree">
            </a>
            <div style="text-align: right; margin-right : 5%;">
                <input type="submit" value="Inscription">
            </div>
        </div>
    </form>
</body>
</html>