<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche articles </title>
</head>

<body>
    <form method="GET">
        <input type="search" name="titre" placeholder="Rechercher le titre" </body>

</html>




















<?php
require 'config';

$allarticles = $dbname->query('SELECT * FROM articles ORDER BY id_article DESC');
if (isset($_GET['titre']) and !empty($_GET['titre'])) {
    $recherche = htmlspecialchars($_GET['titre']);

    $allarticles = $dbname->query('SELECT titre FROM articles WHERE titre LIKE "%' . $recherche . '%" ORDER BY id_article DESC');
}
