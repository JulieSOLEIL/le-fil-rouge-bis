<?php
session_start();
$page = 'erreur';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque de L'Inconnu</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/c19fce56fe.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include '../pages/header.php';
    ?>
    <main class="container">
        <p class="erreur">Erreur : site indisponible</p>
    </main>
    <?php
    include '../pages/footer.php';
    ?>
</body>

</html>