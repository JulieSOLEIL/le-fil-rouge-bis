<?php
if (isset($_SESSION['prenom_user'])) {
    $identifiant = $_SESSION['prenom_user'];

} else {
    $identifiant = '';
}
?>
<main id="tableauBord">
    <section class="left_column_general">
        <p class="tableau_p1">Tableau de bord</p>
        <p class="tableau_p2"><a href="index.php?entite=user&action=donneesPerso">Mes données personnelles</a></p>
        <div class="left_column_livres">
            <div class="tableau_div">
                <p class="tableau_p1">Mes ouvrages</p>
                <p class="tableau_p2"><a href="#">en cours de prêt</a></p>
                <p class="tableau_p2"><a href="#">déjà empruntés</a></p>
                </ul>
            </div>
    </section>
    <section class="right_column_general">
        <?php
        if ($identifiant === $_SESSION['prenom_user']) {
            echo '<h3 class ="right_column_h3"> Bienvenue '. $identifiant .'.<br><br> Le tableau de bord permet de consulter vos informations personelles,<br> ainsi que les différents livres en cours de prêt et aussi votre historique d\'emprunts.</h3>';
        } elseif ($donneesPerso === '') {
           
        }
        ?>
       

    </section>
</main>