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

    case 'tableauBord':
        $vue = 'client/tableauBord';
        break;

    case 'donneesPerso':
        $vue = 'client/tableauBord';
        break;

    // case 'newCompte':
    //     $methode = $_SERVER['REQUEST_METHOD'];
    //     if ($methode === 'POST') {
    //         try {
    //             enregUser();
    //             $vue = 'accueil';
    //         } catch (Exception $err) {
    //             $erreur = $err->getMessage();
    //             $vue = 'admin/formAddUser';
    //         }
    //     } else {
    //         $erreur = '';
    //         $vue = 'admin/formAddUser';
    //     }
    //     break;

    default:
        # code...
        break;
}
