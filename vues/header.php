<?php
// session_start();
if (isset($_SESSION['prenom_user'])) {
    $identifiant = $_SESSION['prenom_user'];
    $categorie = $_SESSION['categorie_user'];
} else {
    $identifiant = '';
    $categorie = '';
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
            } elseif ($categorie === 'admin') {
                echo '<li class="drop"><a>Bonjour ' . $identifiant . ' <i class="fas fa-user-circle"></i> ' . '<br>' . '(' . $categorie . ')' . '</a>
                    <ul class="sous">
                    <li><a class="option1" href="#">Gestion ouvrages</a></li>
                    <li><a class="option1" href="#">Gestion membres</a></li>
                    <li><a class="option2" href="index.php?entite=user&action=deconnect">Déconnexion</a></li>
                    </ul>
                    <li class="nav-txt"><a href="index.php?entite=wishList&action=monPanier">Mon panier <i class="fas fa-shopping-basket"></a></i></li>
                     </li>';
            } else {
                echo '<li class="drop"><a>Bonjour ' . $identifiant . ' <i class="fas fa-user-circle"></i> ' . '<br>' . '(' . $categorie . ')' . '</a>
                    <ul class="sous">
                    <li><a class="option1" href="index.php?entite=user&action=tableauBord">Tableau de bord</a></li>
                    <li><a class="option2" href="index.php?entite=user&action=deconnect">Déconnexion</a></li>
                    </ul>
                    <li class="nav-txt"><a href="index.php?entite=wishList&action=monPanier">Mon panier <i class="fas fa-shopping-basket"></a></i></li>
                     </li>';
            }
            ?>
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
        </ul>
    </nav>
    <!-- <div id="searchBar">
        <input class="search-txt" type="search" name="" placeholder="rechercher un livre...">
        <button type="submit" class="search-btn"><a href="#"><i class="fas fa-search"></i></a></button>
    </div> -->
</header>