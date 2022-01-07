<?php
if (isset($_SESSION['prenom_user'])) {
    $identifiant = $_SESSION['prenom_user'];
} else {
    $identifiant = '';
}
?>
<main id="gm_main">
    <div class="gm_contenant">
        <h3 class="gm_h3">Bienvenue sur la gestion des ouvrages <span class="gm_span"><?php echo $_SESSION['prenom_user']; ?></span>.</h3>
        <p class="gm_p">Vous pouvez gérer l'ajout de livres, modifier ou même en supprimer.</p>
        <section class="gm_box">
            <div class="gm_Membre"><a href="index.php?entite=admin&action=add_user">Ajouter Ouvrage</a></div> <br>
            <div class="gm_Membre"><a href="#">Modifier Ouvrage</a></div> <br>
            <div class="gm_Membre"><a href="#">Supprimer Ouvrage</a></div> <br>
        </section>

        <div class="gm_visuelMembre">
            
        </div>
    </div>
</main>