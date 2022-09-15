<?php
    session_start();
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
    <?php
        require("header.php");
    ?>
    <figure class="image is-3by1">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIgF-Hs-6YSQIsVERUN9FMKXmVbdfyjrZSUw&usqp=CAU">
    </figure>
    <label for="story"></label>

    <textarea id="story" name="story" 
            rows="10" cols="310"disabled>
    Les informations à propos de la M2L
    </textarea>
</body>
</html>