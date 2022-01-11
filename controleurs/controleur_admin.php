<?php

require 'modeles/modele_user.php';

switch ($action) {

    case 'donneesPerso':
        $vue = 'client/tableauBord';
        break;

    case 'add_user':
        $vue = 'admin/formAddUser';
        break;

    case 'update_user':
        $vue = '';
        break;

    case 'suppr_user':
        $vue = '';
        break;

    case 'gestionMembre':
        $vue = 'admin/gestionMembre';
        break;

    case 'newCompte':
        $erreur = '';
        $methode = $_SERVER['REQUEST_METHOD'];
        if ($methode === 'POST') {
            try {
                enregUser();
                $vue = 'admin/formAddUser';
                echo 'echo "<div class="fau_success">
                    <h3 class="fau_h3_success">L\'utilisateur a été créé avec succés.</h3>
                    <p class="fau_p_success">Cliquez <a href="accueil">ici</a> pour retourner à la page d\'accueil</p>
                    </div>';
            } catch (Exception $pdoErr) {
                $vue = 'admin/formAddUser';
                $erreur = $pdoErr->getMessage();  
            }
        } else {
            $erreur = '';
            $vue = 'admin/formAddUser';
        }
        break;
}
