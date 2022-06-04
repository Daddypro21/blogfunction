<?php
function home()
{
  view("home.view");
}
function posts()
{
    $datas['data'] = getOneOrAll("posts");
    view("posts.view",$datas);
}
function post($id)
{
    if($id == null){
        header("location:../../blogfunction/posts");
        die;
    }
    $datas = getOneOrAll("posts",$id);
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