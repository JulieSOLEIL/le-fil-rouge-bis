<?php
// session_start();
require 'base/dao.php';

function login()
{
    global $login;

    $methode = $_SERVER['REQUEST_METHOD'];
    if ($methode === 'POST') {

        $login = filter_input(INPUT_POST, 'email_user', FILTER_SANITIZE_SPECIAL_CHARS);
        $psw = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);


        // interroger la base de données avec le login
        $user = getUserByLogin($login);

        if ($user) {
            // comparer le $psw avec le mot de passe de la base de données

            if (password_verify($psw, $user['psw_user'])) {
                // si connecter alors mémoriser en session le login et ...

                $_SESSION['prenom_user'] = $user['prenom_user'];
                $_SESSION['categorie_user'] = $user['categorie_user'];
                // $vue = 'accueil';

            } else {    // mot de passe incorrect
                // $erreur = 'Mot de passe erroné !';
                // $vue ='connexion';
                throw new Exception('Mot de passe erroné !');
            }
        } else {    // login non trouvé en base
            // $erreur = 'Login erroné !';
            // $login = '';
            // $vue ='connexion';
            throw new Exception('Login erroné !');
        }
    }
}

function logout()
{

    global $vue;

    $_SESSION = array();
    session_destroy();

    $vue = 'accueil';
}
function enregUser()
{

    $client = [
        
        'custom_id' => filter_input(INPUT_POST, 'custom_id', FILTER_SANITIZE_SPECIAL_CHARS),
        'nom_user' => filter_input(INPUT_POST, 'nom_user', FILTER_SANITIZE_SPECIAL_CHARS),
        'prenom_user' => filter_input(INPUT_POST, 'prenom_user', FILTER_SANITIZE_SPECIAL_CHARS),
        'adresse_user' => filter_input(INPUT_POST, 'adresse_user', FILTER_SANITIZE_SPECIAL_CHARS),
        'email_user' => filter_input(INPUT_POST, 'email_user', FILTER_SANITIZE_SPECIAL_CHARS),
        'psw_user' => filter_input(INPUT_POST, 'psw_user', FILTER_SANITIZE_SPECIAL_CHARS),
        'tel_user' => filter_input(INPUT_POST, 'tel_user', FILTER_SANITIZE_SPECIAL_CHARS),
        'categorie_user' => filter_input(INPUT_POST, 'categorie_user', FILTER_SANITIZE_SPECIAL_CHARS),
        'type_membre' => filter_input(INPUT_POST, 'type_membre', FILTER_SANITIZE_SPECIAL_CHARS),
        'creation_compte' => filter_input(INPUT_POST, 'creation_compte', FILTER_SANITIZE_SPECIAL_CHARS),
    ];

    setNewUser($client);
    // $_SESSION['prenom_user'] = $client['prenom_user'];
    // $_SESSION['categorie_user'] = $client['categorie_user'];
}