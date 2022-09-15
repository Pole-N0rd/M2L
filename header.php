<header role="header">
    <nav class="menu" role="navigation">
        <div class="inner">
            <div class="m-left">
                <a href="#" class="m-link">Accueil</a>
                <a href="ajoutfaq.php" class="m-link">FAQ</a>
            </div>
            <div class="m-right">
                <?php
                if(isset($_SESSION['username'])) {
                    echo "<a href='#' class='m-link'>Mon compte</a>";
                    echo "<a href='disconnect.php' class='m-link'>Se déconnecter</a>";
                } else {
                    echo "<a href='login.php' class='m-link'>Se connecter</a>";
                    echo "<a href='register.php' class='m-link'>S'inscrire</a>";
                }
                ?>
            </div>
    </nav>
</header>