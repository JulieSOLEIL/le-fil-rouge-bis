<?php
if (isset($_SESSION['identifiant'])) {
    $identifiant = $_SESSION['identifiant'];
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
                echo '<li class="nav-txt"><a href="/pages/connexion.php">Connexion <i class="fas fa-user-circle"></a></i></li>';
            } else {
                echo '<li class="nav-txt"><a href="/pages/deconnexion.php">Deconnexion <i class="fas fa-user-circle"></a></i></li>';
            }
                ?>

                <li class="nav-txt"><a href="#">Mon panier <i class="fas fa-shopping-basket"></a></i></li>
                <li class="dropdown"><a>Infos Pratiques <i class="fa fa-caret-down"></i></a>
                    <ul class="sous">
                        <li><a class="sousTxt" href="/pages/trouver.php">Où nous trouver</a></li>
                        <li><a class="sousTxt" href="/pages/membre.php">Devenir membre</a></li>
                        <li><a class="sousTxt" href="/pages/conditions.php">conditions générales</a></li>
                    </ul>
                </li>
                <li class="nav-txt"><a href="/pages/collections.php">Nos Collections</a>
                </li>
                <li class="nav-txt"><a href="/pages/bibliotheque.php">La Bibliothèque</a></li> 
                <span class="badge badge-secondary">DATE : <?php echo date('d.m.Y') ?></span>
            </ul>
        </nav>
        <div id="searchBar">
              <input class="search-txt" type="search" name="" placeholder="rechercher un livre...">
              <button type="submit" class="search-btn"><a href="#"><i class="fas fa-search"></i></a></button>
        </div>
 </header>