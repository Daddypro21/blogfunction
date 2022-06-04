<?php
function admin()
{
    $datas['data'] = getOneOrAll("posts");
    view('admin.view',$datas);
}

function createPost($tableau = null)
{
    //...Example
    if($tableau === null || empty($tableau['post'])){
        view("createPost.view");
        die;
    }
    $tableau = $tableau['post'];
    $response = create("posts",$tableau);
    if($response === true){
        var_dump("Okay tout marche à merveille");
    }
}

 //Example.......
function updatePost($tableau)
{ 
   
    if( empty($tableau['post'])){
        $tableau ="tableau vide";
        view("update.view");
        die;
    }
    $id = $tableau["1"];
    $tableau = $tableau['post'];
    update("posts",$tableau,$id);
}
function deletePost($id)
{
    delete("posts",$id);
}
