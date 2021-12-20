<?php
session_start();
require '../base/dao.php';

$page = 'collections';
// $collection = filter_input(INPUT_GET, 'collection', FILTER_SANITIZE_STRING);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque de L'Inconnu</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/collections.css">
    <script src="https://kit.fontawesome.com/c19fce56fe.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include '../pages/header.php';
    ?>

    <main class="contenu">
        <div class="titre">
            <h1>Collections</h1>
        </div>
        <section class="contenant">
            <div class="cube">
               <a href="informatique.php"><h3>Infomatique</h3></a> 
            </div>
            <div class="cube">
                <h3>Medecine</h3>
            </div>
            <div class="cube">
                <h3>Art et Litterature</h3>
            </div>
            <div class="cube">
                <h3>Droit</h3>
            </div>
            <div class="cube">
                <h3>Economie</h3>
            </div>
            <div class="cube">
                <h3>Gestion entreprise</h3>
            </div>
            <div class="cube">
                <h3>Commerce</h3>
            </div>
            <div class="cube">
                <h3>Architecture</h3>
            </div>
            <div class="cube">
                <h3>Histoire</h3>
            </div>
            <div class="cube">
                <h3>Geographie</h3>
            </div>
            <div class="cube">
                <h3>Comptabilite</h3>
            </div>
            <div class="cube">
                <h3>Psychologie</h3>
            </div>
        </section>
    </main>
         

    <?php
    include '../pages/footer.php';
    ?>
</body>

</html>