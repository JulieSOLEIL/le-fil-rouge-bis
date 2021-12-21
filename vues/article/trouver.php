<?php
session_start();
$vue = 'trouver';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque de L'Inconnu</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/trouver.css">
    <script src="https://kit.fontawesome.com/c19fce56fe.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    require '../vues/header.php';
    ?>

    <main class="contenu">
        <section class="texte">
            <div>
                <h2>Créteil</h2>
                <p>Du lundi au vendredi</p>
                <p>08h00 à 20h00</p>
                <p>et les samedis</p>
                <p>08h00 à 15h00</p>
                <p>Téléphone : 0145858704</p>
                <p>9 rue Marc Seguin</p>
                <p>94000 Créteil</p>
            </div>
        </section>
        <section class="carte">
            <div>
                <h4>Nous trouver</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10515.321628047195!2d2.435245!3d48.7851279!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a84a845271b523a!2sAFPA!5e0!3m2!1sfr!2sfr!4v1638442022626!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
    </main>
    <?php
    include '../vues/footer.php';
    ?>
</body>

</html>