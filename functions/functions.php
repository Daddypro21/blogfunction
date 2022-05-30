<?php

function home()
{
  return  require "../view/home.view.php";
}
function posts()
{
    echo "Je suis la page qui affiche les posts";
}
function post($param)
{
    echo "Je suis la page qui affiche le post {$param}";
}

function contact()
{
    return  require "../view/contact.view.php";
}

function error404()
{
    return  require "../view/error404/error404.view.php";
}