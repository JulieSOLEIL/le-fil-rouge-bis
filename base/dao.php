<?php
function connexion()
{
    $dsn = 'mysql:host=localhost;dbname=bibliotheque_inconnu;charset=utf8';
    $userName = 'root';
    $password = '';

    try {
        return new PDO($dsn, $userName, $password);
    } catch (PDOException $err) {
        throw new Exception('Site momentanément indisponible');
        exit();
    }
}

function getAllArticleByCategorie($categ)
{

    $refPdo = connexion();

    $sql = 'SELECT * FROM articles NATURAL JOIN categories WHERE libelle_cat=:cat;';
    $stat_article = $refPdo->prepare($sql);
    $stat_article->bindParam(':cat', $categ, PDO::PARAM_STR);
    $stat_article->execute();
    $articles = $stat_article->fetchAll(PDO::FETCH_ASSOC);

    return $articles;
}

function getUserByLogin($log)
{

    $refPdo = connexion();

    $sql = 'SELECT * FROM users WHERE email_user =:identifiant';
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

function setNewUser($user)
{
    $refPdo = connexion();
    
    $sqlSetNewUser = 'INSERT INTO users VALUES (null, :card_id, :nom_user, :prenom_user, :adresse_user, :email_user, :psw_user, :tel_user, :categorie_user, :type_membre, :creation_compte);';
    $stat_user = $refPdo->prepare($sqlSetNewUser);

    $stat_user->bindParam(':card_id', $user['card_id'], PDO::PARAM_STR);
    $stat_user->bindParam(':nom_user', $user['nom_user'], PDO::PARAM_STR);
    $stat_user->bindParam(':prenom_user', $user['prenom_user'], PDO::PARAM_STR);
    $stat_user->bindParam(':adresse_user', $user['adresse_user'], PDO::PARAM_STR);
    $stat_user->bindParam(':email_user', $user['email_user'], PDO::PARAM_STR);
    $psw = password_hash($user['psw_user'], PASSWORD_DEFAULT);
    $stat_user->bindParam(':psw_user', $psw, PDO::PARAM_STR);
    $stat_user->bindParam(':tel_user', $user['tel_user'], PDO::PARAM_STR);
    $stat_user->bindParam(':categorie_user', $user['categorie_user'], PDO::PARAM_STR);
    $stat_user->bindParam(':type_membre', $user['type_membre'], PDO::PARAM_STR);
    $stat_user->bindParam(':creation_compte', $user['creation_compte'], PDO::PARAM_STR);

    try {
        $stat_user->execute();
    } catch (PDOException $pdoErr) {
        echo '<pre>';
        var_dump($pdoErr);
        var_dump($stat_user);
        echo '</pre>';
        throw new Exception('Login déjà existant! merci de rechercher un email unique');
    }
}

function getDonneesPersos($user)
{

    $refPdo = connexion();

    $sql = 'SELECT * FROM users';
}