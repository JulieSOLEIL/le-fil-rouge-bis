<?php
$page = 'connexion';
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
    include './header.php';
    ?>

    <main>
        <div class="container">
            <h3>Identifiez-vous</h3>
            <form method="POST" action="verifConnexion.php">
                <div class="row">
                    <div class="col-25">
                        <label for="idForm">Identifiant:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="idForm" name="identifiant" placeholder="Entrez votre adresse mail...">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="mdp">Mot de passe:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="mdp" name="password" placeholder="Entrez votre mot de passe...">
                    </div>
                </div>
                <div class="row">
                    <input type="submit" value="Validez">
                </div>
            </form>
        </div>
    </main>

    <?php
    include './footer.php';
    ?>
</body>

</html>