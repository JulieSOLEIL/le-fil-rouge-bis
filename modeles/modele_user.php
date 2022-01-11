<?php
// session_start();

function login()
{
    global $login;
    require 'base/dao.php';


    $methode = $_SERVER['REQUEST_METHOD'];
    if ($methode === 'POST') {

        $login = filter_input(INPUT_POST, 'email_user', FILTER_SANITIZE_EMAIL);
        $psw = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);


        // interroger la base de données avec le login
        $user = getUserByLogin($login);

        if ($user) {
            // comparer le $psw avec le mot de passe de la base de données
            if (password_verify($psw, $user['psw_user'])) {
                // si connecter alors mémoriser en session le login et ...
                $_SESSION['prenom_user'] = $user['prenom_user'];
                $_SESSION['categorie_user'] = $user['categorie_user'];
            } else {    // mot de passe incorrect
                throw new Exception('Mot de passe erroné !');
            }
        } else {    // login non trouvé en base
            throw new Exception('Login erroné !');
        }
    }
}

function logout()
{
    require 'base/dao.php';
    global $vue;

    $_SESSION = array();
    session_destroy();

    $vue = 'accueil';
}
function enregUser()
{
    require 'base/dao.php';
    global $user;

    // getCustom_id($client);
    $rand_num = rand(001,999);
    // datas en majuscule
    $getNom_user = strtoupper($_POST['nom_user']);
    $getPrenom_user = strtoupper($_POST['prenom_user']);
    // concatenation nom et prenom
    $n = substr($getNom_user, 0, 3);
    $p = substr($getPrenom_user, 0, 3);
    $card_id = $n . "_" . $p . "_" . $rand_num;

    $client = [

        'nom_user' => filter_input(INPUT_POST, 'nom_user', FILTER_SANITIZE_SPECIAL_CHARS),
        'prenom_user' => filter_input(INPUT_POST, 'prenom_user', FILTER_SANITIZE_SPECIAL_CHARS),
        'adresse_user' => filter_input(INPUT_POST, 'adresse_user', FILTER_SANITIZE_SPECIAL_CHARS),
        'email_user' => filter_input(INPUT_POST, 'email_user', FILTER_SANITIZE_EMAIL),
        'psw_user' => filter_input(INPUT_POST, 'psw_user', FILTER_SANITIZE_SPECIAL_CHARS),
        'tel_user' => filter_input(INPUT_POST, 'tel_user', FILTER_SANITIZE_NUMBER_INT),
        'categorie_user' => filter_input(INPUT_POST, 'categorie_user', FILTER_SANITIZE_SPECIAL_CHARS),
        'type_membre' => filter_input(INPUT_POST, 'type_membre', FILTER_SANITIZE_SPECIAL_CHARS),
        'creation_compte' => filter_input(INPUT_POST, 'creation_compte', FILTER_SANITIZE_SPECIAL_CHARS),
        'card_id' => $card_id,
    ];
    setNewUser($client);
}
