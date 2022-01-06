<?php
if (isset($_SESSION['prenom_user'])) {
    $identifiant = $_SESSION['prenom_user'];
} else {
    $identifiant = '';
}
?>
<main id="gm_main">
    <div class="gm_contenant">
        <h3 class="gm_h3">Bienvenue sur la gestion des membres <span class="gm_span"><?php echo $_SESSION['prenom_user']; ?></span>.</h3>
        <p class="gm_p">Vous pouvez gérer l'ajout d'un nouveau membre, modifier ou même supprimer un membre.</p>
        <section class="gm_box">
            <div class="gm_Membre"><a href="index.php?entite=admin&action=add_user">Ajouter Membre</a></div> <br>
            <div class="gm_Membre"><a href="#">Modifier Membre</a></div> <br>
            <div class="gm_Membre"><a href="#">Supprimer Membre</a></div> <br>
        </section>

        <div class="gm_visuelMembre">
            
        </div>
    </div>
</main>