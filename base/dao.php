<?php

$dsn = 'mysql:host=localhost;dbname=bibliotheque_inconnu;charset=utf8';
$userName = 'root';
$password = '';

try {
    $refPdo = new PDO($dsn, $userName, $password);
} catch (PDOException $err) {
    // var_dump($err);
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

function getUserByLogin($log) {

    global $refPdo;

    $sql = 'SELECT * FROM users WHERE pseudo =:identifiant';
    $stat_user = $refPdo->prepare($sql);
    $stat_user->bindParam(':identifiant', $log, PDO::PARAM_STR);
    $stat_user->execute();

    if ($stat_user->rowCount() == 1) {
        // Comparer le $psw avec mdp de la database
        $user = $stat_user->fetch(PDO::FETCH_ASSOC);
        return $user;
    }
    return false;
}

// function addOuvrage($isbn_ouvrage, $photo, $titre_ouvrage, $date_parution, $dispo, $id_auteur, $id_collection, $id_editeur) {

//     if(require())

// }