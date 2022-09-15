
<?php
    session_start();
    require("connectionBdd.php");
    
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['mdp_user']) ? $_POST['mdp_user'] : '';
    $submit = isset($_POST['submit']) ? $_POST['submit'] : '';

    if($submit) {
        $sql ="select pseudo_utilisateur, mdp_utilisateur from utilisateur where pseudo_utilisateur = :pseudo and mdp_utilisateur = :mdp";
        try {
            $sth = $dbh->prepare($sql);
            $sth->execute(array(':pseudo' => $username, ':mdp' => $password));
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch(Exception $e) {
            echo "<p>" .$e->getMessage(). "</p>";
        }
        if(count($rows) == 1) {
            $_SESSION['username'] = $username;
            header("location: index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Connexion</title>
</head>
<body>
    <?php
        require("header.php");
    ?>
    <h1 class="title">Connexion</h1>
    <?php
        if(isset($_SESSION['username'])) {
            echo '<p>Vous êtes connecté ' .$_SESSION['username']. '</p>';
            echo '<p>Accéder à la page <a href="index.php">page d\'accueil</a></p>';
        } else {
    ?>
    <form action="login.php" method="post">
        <div>
            <label class="label" for="identifiant">Identifiant</label>
            <div>
                <input class="input" type="text" placeholder="Entrer votre identifiant" name="username" required>
            </div>
        </div>
        <div>
            <label class="label" for="mdp">Mot de passe</label>
            <div>
                <input class="input" type="password" placeholder="Entrer votre mot de passe" name="mdp_user" required>
            </div>
        </div>
        <div>
            <a href="newpassword.php">Mot de passe oublié ?</a>
            <div style="text-align: right; margin-right : 5%;">
                <input type="submit" name="submit" value="Connexion">
            </div>
        </div>
    </form>
    <?php } ?>
</body>
</html>