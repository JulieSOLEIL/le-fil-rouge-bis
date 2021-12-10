<?php
// démarrage de la gestion des sessions
session_start();

//var_dump($_POST);
$identifiant = $_POST['identifiant'];
$password = $_POST['password'];

// interroger la base de données avec le login
if ($identifiant = 'sun.julie0@gmail.com') {
    // comparer le $psw avec le mot de passe de la base de données
    $mdp = 'yoma004';
    if ($mdp === $password) {
        // si connecter alors mémoriser en session le login et ...

        $_SESSION['identifiant'] = $identifiant;
        header('Location:../index.php');
        
    } else {    // mot de passe incorrect
        header('Location:/pages/connexion.php');
    }
} else {    // login non trouvé en base
    header('Location:/pages/connexion.php');
}