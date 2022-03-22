<?php

$dsn = 'mysql:host=127.0.0.1;dbname=m2l-g1;

port=3306;charset=UTF-8';

$pdo = new PDO($dsn, 'root' , '');
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