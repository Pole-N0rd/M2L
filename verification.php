<?php
    session_start();
    if(isset($_POST['username']) && isset($_POST['password'])) {
        require("connectionBdd.php");
        $sql = "select count(*) from utilisateur where pseudo_utilisateur = '".$_POST['username']."' and '" .$_POST['password']. "'";
        try {
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $ex) {
            die("Erreur lors de la requête SQL : " .$ex->getMessage());
        }
        echo "<p>" .$rows. "</p>";
    }
?>