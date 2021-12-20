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
            <h1>Recherche d'ouvrages</h1>
        </div>
        <section class="contenant">
            <div class="cube">
                <label>Par Collections</label>
                <input type="text" name="collection" id="collection" placeholder="Entrez les mots-clés">
            </div>
            <div id="result-search"></div>

            <div class="cube">
                <label>Par Thèmes</label>
                <input type="text" name="theme" placeholder="Entrez les mots-clés">
            </div>

            <div class="cube">
                <label>Par Auteurs</label>
                <input type="text" name="auteur" placeholder="Entrez les mots-clés">
            </div>
            <button type="submit">Rechercher</button>
            </section>
            <!-- <section class="contenant">
            <div class="cube">
                <label>par collection</label>
                <select id="collection" name="collection" size="2" multiple>
                <option value="arrow">Arrow</option>
                <option value="atlas">Atlas Illustre</option>
                <option value="babel">Babel</option>
                <option value="beaux_livre">Beaux Livres Relies</option>
                <option value="bibliotheca">Bibliotheca</option>
                <option value="bloc_notes">Bloc-Notes</option>
                <option value="cahiers">Cahiers Libres</option>
                <option value="comprendre">Comprendre</option>
                <option value="divers">Divers</option>
                <option value="dunod">Dunod</option>
                <option value="epsilon">Epsilon</option>
                <option value="eyrolles">Eyrolles</option>
                <option value="fil">Fil Droit</option>
                <option value="grd_larousse">Grand Larousse</option>
                <option value="larousse">Larousse</option>
                <option value="ldp">Ldp</option>
                <option value="ldp_doc">Ldp Documents</option>
                <option value="neant">Le Néant</option>
                <option value="librio">Librio</option>
                <option value="meilleur_droit">Meilleur du Droit</option>
                <option value="mytho">Mytho</option>
                <option value="nuls_poche">Nuls en Poche</option>
                <option value="opti">Optimum</option>
                <option value="poche">Poche</option>
                <option value="odile">Poche Odile Jacob</option>
                <option value="nuls_business">Pour Les Nuls Business</option>
                <option value="RI">Ressources Informatiques</option>
                <option value="revue_point">Revue Le Point Hors-Série</option>
                <option value="sorciere">Sorcières</option>
                <option value="texto">TEXTO</option>
                <option value="totem">Totem</option>
                <option value="oeuvres">Oeuvres et Thèmes</option>
            </select>
            </div>
            <div class="cube">
                <label>par auteur</label>
                <select name="auteur" id="auteur" size="2" multiple>
                    <option value="acissi">ACISSI</option>
                    <option value="Andre">André </option>
                </select>
            </div>
            <div class="cube">
                <label>par thème</label>
                <select name="theme" id="theme">
                    <option value=""></option>
                </select>
            </div>
            <div class="cube">
                <button><a href="#"> Voir tout</button>
            </div>

        </section> -->
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="/js/collection.js"></script>
    <?php
    include '../pages/footer.php';
    ?>
</body>

</html>