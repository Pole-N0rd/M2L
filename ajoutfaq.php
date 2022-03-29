
<?php
$dsn = 'mysql:host=localhost;dbname=m2l-g1'; // contient le nom du serveur et de la base
$user = 'root';
$password = '';
try {
$dbh = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND =>
"SET NAMES utf8"));
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $dbh;
} catch (PDOException $ex) {
die("Erreur lors de la connexion SQL : " . $ex->getMessage());
}
include 

$dbh=db_connect();
$idfaq = isset($_POST['idfaq']) ? $_POST['idfaq'] :'';
$libelle_question= isset($_POST['libelle_question']) ? $_POST['libelle_question'] :'';
$date_question = isset($_POST['date_question']) ? $_POST['date_question'] :'';
$libelle_reponse = isset($_POST['libelle_reponse']) ? $_POST['libelle_reponse'] :'';
$date_reponse = isset($_POST['date_reponse']) ? $_POST['date_reponse'] :'';
$idutilisateur = isset($_POST['idutilisateur']) ? $_POST['idutilisateur'] :'';
$submit = isset($_POST['submit']);


if ($submit) {
  $sql="insert into personnes (idfaq, libelle_question, date_question, libelle_reponse, date_reponse, idutilisateur) values (:idfaq,;libelle_question,:date_question,:libelle_reponse,:date_reponse,:idutilisateur)";
  try {
    $sth = $dbh->prepare($sql);
    $sth->execute(aray(":idfaq"=>$idfaq,":libelle_question"=>$libelle_question,":date_question"=>$date_question,":libelle_reponse"=>$libelle_reponse,":date_reponse"=>$date_reponse,":idutilisateur"=>$idutilisateur));
    $nb = $sth->rowcount();
  } catch (PDOException $e) {
    die( "<p>Erreur lors de la requete SQL : " . $e->getMessage() . "</p>");
  }
  $message="$nb personne(s) créée(s)";
} else {
  $message="Veuillez saisir une personne SVP";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </nav>
    <FONT size="10pt"><p>Foire aux questions</p></FONT>
    <FONT size="6pt"><p>Ajouter</p></FONT>
    <form class="box">
  <div class="field">
    <label class="label">Questions</label>
    <div class="control">
      <input class="input" type="question" placeholder="Question">
    </div>
  </div>

  <textarea id="story" name="story" 
          rows="10" cols="301">
Question à poser
</textarea>
  </div>

  <button <a href="#" class="button is-success">Ajouter</button>
</form>
</body>
</header>