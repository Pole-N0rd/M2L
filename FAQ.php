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
                    <li>
                        <a target="_blank">Emilio Dingo</a></br>
                        <a class="Date">21 March, 2020</a></br></br>
                        <a class="Question"> Nam pellentesque felis vitae justo accumsan ?</a></br></br>
                        <a class="Reponse">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            <p><a href="modifierfaq.php">Modifier</a>&nbsp;<a href="supprimerfaq.php">Supprimer</a></p>
                    </li>
                    <li>
                        <a target="_blank">papan la fripouille</a></br>
                        <a class="Date">21 March, 2020</a></br></br>
                        <a class="Question"> Nam pellentesque felis vitae justo accumsan ?</a></br></br>
                        <a class="Reponse">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            <p><a href="modifierfaq.php">Modifier</a>&nbsp;<a href="supprimerfaq.php">Supprimer</a></p>
                    </li>
                    <li>
                        <a target="_blank">JeSuis</a></br>
                        <a class="Date">21 March, 2020</a></br></br>
                        <a class="Question"> Nam pellentesque felis vitae justo accumsan ?</a></br></br>
                        <a class="Reponse">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            <p><a href="modifierfaq.php">Modifier</a>&nbsp;<a href="supprimerfaq.php">Supprimer</a></p>

                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>