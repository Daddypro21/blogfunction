<?php
require "../database/model.php";
function home()
{
  view("home.view");
}
function posts()
{
    view("posts.view");
}
function post($id=null)
{
    if($id == null){
        view("posts.view");
        die;
    }
    $datas = getId("posts",$id);
    //foreach($datas as $data );
    view("post.view",$datas);//petit exemple
}

function contact()
{
    view("contact.view");
}

function error404()
{
    view("error404/error404.view");
}