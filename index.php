<?php
    session_start();
    if (isset($_GET['entite'])){
        $entite = $_GET['entite'];
        $action = $_GET['action'];
    } else {
        $entite = 'geiufvhvtbtt';
        $action = 'afuhovibriug';
    }
    $vue = '';

    try {
    switch ($entite) {
        case 'user':
            require 'controleurs/controleur_user.php';
            break;

        case 'article':
            require 'controleurs/controleur_article.php';

            break;
        
        default:
            $vue = 'accueil';
            break;
    }
    } catch (Exception $e) {
            $erreur = $e->getMessage();
            $vue = 'erreur';
    }
    include 'vues/template.php';
    