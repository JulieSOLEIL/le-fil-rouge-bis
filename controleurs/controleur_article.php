<?php

switch ($action) {
    case 'liste':
        $cat = filter_input(INPUT_GET, 'cat');
        $articles = getAllArticle($cat);
        $vue = 'article/liste';
        break;

    case 'biblio':
        $vue = 'article/bibliotheque';
        break;
    case 'collections':
        $vue = 'article/collections';
        break;
    case 'conditions':
        $vue = 'article/conditions';
        break;
    case 'membre':
        $vue = 'article/membre';
        break;
    case 'trouver':
        $vue = 'article/trouver';
        break;

    default:
    $erreur = 'Page en construction';
    $vue = 'erreur';
        break;
}
