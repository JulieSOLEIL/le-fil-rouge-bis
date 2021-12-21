<?php
session_start();
if (isset($_SESSION['nom_user'])) {
    $identifiant = $_SESSION['nom_user'];
} else {
    $identifiant = '';
}
?>
<header>
    <nav>
        <ul class="navbar">
            <li class="logo"><a href="../index.php"><img src="/images/open-book.png" alt="logo"> Bibliothèque de L'INCONNU</a>
            </li>

            <?php
            if ($identifiant === '') {
                echo '<li class="nav-txt"><a href="index.php?entite=user&action=login">Connexion <i class="fas fa-user-circle"></a></i></li>';
            } else {
                echo '<li class="drop"><a>Bonjour ' . $identifiant . ' <i class="fas fa-user-circle"></a></i>';
                echo '<ul class="sous">';
                echo '<li><a class="option1" href="#">Tableau de bord</a></li>';
                echo '<li><a class="option2" href="index.php?entite=user&action=deconnect">Déconnexion</a></li>';
                echo '</ul></li>';
            }
            ?>

            <li class="nav-txt"><a href="#">Mon panier <i class="fas fa-shopping-basket"></a></i></li>
            <li class="dropdown"><a>Infos Pratiques <i class="fa fa-caret-down"></i></a>
                <ul class="sous">
                    <li><a class="sousTxt" href="index.php?entite=article&action=trouver">Où nous trouver</a></li>
                    <li><a class="sousTxt" href="index.php?entite=article&action=membre">Devenir membre</a></li>
                    <li><a class="sousTxt" href="index.php?entite=article&action=conditions">conditions générales</a></li>
                </ul>
            </li>
            <li class="nav-txt"><a href="index.php?entite=article&action=collections">Nos Collections</a>
            </li>
            <li class="nav-txt"><a href="index.php?entite=article&action=biblio">La Bibliothèque</a></li>
            <span class="badge badge-secondary">DATE : <?php echo date('d.m.Y') ?></span>
        </ul>
    </nav>
    <!-- <div id="searchBar">
        <input class="search-txt" type="search" name="" placeholder="rechercher un livre...">
        <button type="submit" class="search-btn"><a href="#"><i class="fas fa-search"></i></a></button>
    </div> -->
</header>