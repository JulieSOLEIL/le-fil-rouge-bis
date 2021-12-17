<?php

$dsn = 'mysql:host=localhost;dbname=bibliotheque_inconnu;charset=utf8';
$userName = 'root';
$password = '';

try {
    $refPdo = new PDO($dsn, $userName, $password);
} catch (PDOException $err) {
    header('Location: /pages/erreur.php');
    exit();
}

function getAllArticleByCategorie($categ){

    global $refPdo;

    $sql = 'SELECT * FROM articles NATURAL JOIN categories WHERE libelle_cat=:cat;';
    $stat_article = $refPdo->prepare($sql);
    $stat_article->bindParam(':cat', $categ, PDO::PARAM_STR);
    $stat_article->execute();
    $articles = $stat_article->fetchAll(PDO::FETCH_ASSOC);

    return $articles;
}