<?php

require 'modeles/modele_user.php';

switch ($action) {
    case 'login':
        $erreur = '';
        $login = '';
        $methode = $_SERVER['REQUEST_METHOD'];
        if ($methode === 'POST') {
            try {
                login();
                $vue = 'accueil';
            } catch (Exception $e) {
                echo 'passage dans erreur login';
                $erreur = $e->getMessage();
                $login = '';
                $vue = 'connexion';
            }
        } else {
            $vue = 'connexion';
        }
        break;

    case 'deconnect':
        logout();
        break;

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
        $methode = $_SERVER['REQUEST_METHOD'];
        if ($methode === 'POST') {
            try {
                enregUser();
                $vue = 'admin/formAddUser';
                echo 'echo "<div class="fau_success">
                    <h3 class="fau_h3_success">L\'utilisateur a été créée avec succés.</h3>
                    <p class="fau_p_success">Cliquez <a href="accueil">ici</a> pour retourner à la page d\'accueil</p>
                    </div>';
            } catch (Exception $err) {
                $erreur = $err->getMessage();
                $vue = 'admin/formAddUser';
            }
        } else {
            $erreur = '';
            $vue = 'admin/formAddUser';
        }
        break;
}
