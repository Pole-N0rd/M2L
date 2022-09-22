<?php
session_start();
require("connectionBdd.php");

$libelle_question= isset($_POST['libelle_question']) ? $_POST['libelle_question'] :'';
$date_question = isset($_POST['date_question']) ? $_POST['date_question'] : '';
$libelle_reponse = isset($_POST['libelle_reponse']) ? $_POST['libelle_reponse'] : '';
$date_reponse = isset($_POST['date_reponse']) ? $_POST['date_reponse'] : '';
$idutilisateur = isset($_SESSION['idUser']) ? $_SESSION['idUser'] : header("location: disconnect.php");
$submit = isset($_POST['submit']);

if ($submit) {
  $sql="insert into faq(libelle_question, date_question, libelle_reponse, date_reponse, idUtilisateur) values (:libelle_question,:date_question,:libelle_reponse,:date_reponse,:idutilisateur)";
  try {
    $sth = $dbh->prepare($sql);
    $sth->execute(array(
      ":libelle_question"=>$libelle_question,
      ":date_question"=>$date_question,
      ":libelle_reponse"=>$libelle_reponse,
      ":date_reponse"=>$date_reponse,
      ":idutilisateur"=>$idutilisateur));
    $nb = $sth->rowcount();
  } catch (PDOException $e) {
    die( "<p>Erreur lors de la requete SQL : " . $e->getMessage() . "</p>");
  }
  $message="$nb question(s) créée(s)";
} else {
  $message="Veuillez saisir une question SVP";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/fond.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Maison des Ligues</title>
</head>
<body>
<header role="header">
    <nav class="menu" role="navigation">
        <div class="inner">
            <div class="m-left">
                <a href="index.php" class="m-link">Accueil</a>
                <a href="#" class="m-link">FAQ</a>
            </div>
            <div class="m-right">
                <a href="#" class="m-link">deconnexion</a>
            </div>
        </div>
    </nav>
    <h1>Foire aux questions</h1>
    <h2>Ajouter</h2>
    <form class="box" action="ajoutfaq.php" method="post">
      <input class="input" type="question" name="libelle_question" placeholder="Question" required>
      <textarea id="story" name="libelle_reponse" placeholder="Entrez votre réponse ici" rows="10" cols="301"></textarea>
      <input type="submit" name="submit" value="Ajouter la question">
    </form>
</body>
</header>