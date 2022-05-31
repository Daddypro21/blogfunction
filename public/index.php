<?php

/**
 * Chargement des fichiers nécessaires
 */
require "../functions/blogfunctions.php";
require "../functions/router.php";
require "../functions/view/view.php";
 //var_dump($_GET);die;
run($_SERVER['REQUEST_METHOD']);


