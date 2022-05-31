<?php
function home()
{
  view("home.view");
}
function posts()
{
    view("posts.view");
}
function post($data)
{
    view("post.view",array($data));//petit exemple
}

function contact()
{
    view("contact.view");
}

function error404()
{
    view("error404/error404.view");
}