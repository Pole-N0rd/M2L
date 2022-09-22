<?php
    require("connectionBdd.php");

    $sql ="select idFaq, libelle_question, date_question, libelle_reponse, date_reponse, pseudo_utilisateur 
    from faq, utilisateur
    where faq.idUtilisateur = utilisateur.idUtilisateur";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute();
        $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch(Exception $e) {
        die("<p>" .$e->getMessage(). "</p>");
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/FAQcss.css">
    <link rel="stylesheet" href="css/header.css" />
    <title>FAQ</title>
</head>

<body>
    <?php
    require("header.php")
    ?>
    <h1>Foire au question</h1>
    <form>
        <div>
            <p><input type="search" id="Recherche" name="Recherche" placeholder="Rechercher une question le site…" size="100">&nbsp;<a href="">Rechercher</a></p>
            <p><a href="ajoutfaq.php">Ajouter une question</a></p>

        </div>
    </form>

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <ul class="timeline">
                    <?php 
                        foreach($rows as $row) {
                            $date_question = $row["date_question"] == "NULL" ? "Aucune date" : $row["date_question"];
                            $response = $row["libelle_reponse"] == "NULL" ? "Aucune réponse pour le moment" : $row["libelle_reponse"];
                            echo "<li>";
                            echo "<p>" .$row["pseudo_utilisateur"]. "</p>";
                            echo "<p>" .$date_question. "</p></br>";
                            echo "<p>" .$row["libelle_question"]. "</p></br>";
                            echo "<p>" .$response. "</p></br>";
                            echo "<p><a href='modifierfaq.php'>Modifier</a>&nbsp;<a href='supprimerfaq.php'>Supprimer</a></p>";
                            echo "</li>";
                        }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>