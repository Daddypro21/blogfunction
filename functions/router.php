<?php
require "functions.php";

function run($method)
{
    if($method == 'GET'){
       return get($_GET['url']);
    }elseif($method == 'POST'){
      return  post($_POST);
    }
}

function get($url)
{

   $tab = explode("/",$url) ;
   $param = isset($tab[1]) ? $tab[1] : null ;
   return execute($url,$param);
}

function matches($url,$param)
{
    $response = "";

    $home = "";
    $posts = "posts";
    $post = "posts/{$param}";
    $contact = "contact";

    $response .= ($home == $url) ? true : false;
    $response .= ($posts == $url) ? true : false;
    $response .= ($post == $url) ? true : false;
    $response .= ($contact == $url) ? true : false;

    return $response ;
    

}

function execute($url,$param)
{
    if(matches($url,$param)){
        $returnValue = match($url){
            ""=>"home",
            "posts"=>"posts",
            "posts/{$param}"=>"post/{$param}",
            "contact"=>"contact"
        };
        $values = explode('/',$returnValue);
        $function = $values[0];
        return $controller = isset($values[1]) ? $function($values[1]) : $function() ;
        
       }else{
           return error404();
       }
}

