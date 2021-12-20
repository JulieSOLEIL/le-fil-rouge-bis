<?php
session_start();
$page = 'connexion';
$erreur = '';
$login = '';

$methode = $_SERVER['REQUEST_METHOD'];
if ($methode === 'POST') {

    require '../base/dao.php';

    $login = filter_input(INPUT_POST, 'identifiant', FILTER_SANITIZE_SPECIAL_CHARS);
    $psw = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
 
      // interroger la base de données avec le login
      $user = getUserByLogin($login);
   
    if ($user) {
        // comparer le $psw avec le mot de passe de la base de données

        if (password_verify($psw, $user['psw_user'])) {
            // si connecter alors mémoriser en session le login et ...

            $_SESSION['nom_user'] = $user['nom_user'];
            $_SESSION['categorie_user'] = $user['categorie_user'];
            header('Location: ../index.php');
            exit();
        } else { // mot de passe incorrect
            $erreur = 'Mot de passe erroné !';
        }
    } else {    // login non trouvé en base
        $erreur = 'Login erroné !';
        $login ='';
    }
}
?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bibliothèque de L'Inconnu</title>
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/connexion.css">
        <script src="https://kit.fontawesome.com/c19fce56fe.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php
        include '../pages/header.php';
        ?>

        <main>
            <div class="container">
                <h3>Identifiez-vous</h3>
                <form method="POST" action="connexion.php">
                    <?php
                    if ($erreur) {
                        echo '<div class="erreur">';
                        echo $erreur;
                        echo '</div>';
                    }
                    ?>
                    <div class="row">
                        <div class="col-25">
                            <label for="idForm">Identifiant:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="idForm" name="identifiant" placeholder="Entrez votre pseudonyme...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="mdp">Mot de passe:</label>
                        </div>
                        <div class="col-75">
                            <input type="password" id="mdp" name="password" placeholder="Entrez votre mot de passe...">
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Validez">
                    </div>
                </form>
            </div>
        </main>

        <?php
        include '../pages/footer.php';
        ?>
    </body>

    </html>
?>