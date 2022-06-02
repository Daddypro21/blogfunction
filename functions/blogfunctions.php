<?php
require "../database/model.php";
function home()
{
  view("home.view");
}
function posts()
{
    $datas['data'] = getAll("posts");
    view("posts.view",$datas);
}
function post($id)
{
    if($id == null){
        header("location:../../blogfunction/posts");
        die;
    }
    $datas = findById("posts",$id);
    view("post.view",$datas);
}

function contact()
{
    view("contact.view");
}

function error404()
{
    view("error404/error404.view");
}