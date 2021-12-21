<?php
session_start();
$vue = 'items_list';
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
    require '../vues/header.php';

    foreach ($articles as $article) {
        echo '<main id="book_card">';
            '<div class="card">';
            '<p class="dispo">'.$article['dispo']. '</p>';
            '<img src="/upload/'.$article['photo'].'">';
            '<h1>' .$article['titre_ouvrage']. '</h1>';
           
            '<p>Some text about the jeans..</p>';
            '<p><button>Add to Cart</button></p>';
        '</div>';
    '</main>';
    }

    include '../vues/footer.php';
    ?>
</body>

</html>