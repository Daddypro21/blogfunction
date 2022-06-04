<?php
function run($method)
{
    if($method == 'GET'){
       return getMethod($_REQUEST['url']);
    }elseif($method == 'POST'){
      return  postMethod($_REQUEST);
    }

}

function getMethod($method)
{
    //.....Example
    $tableau = explode('/', $method);

    $function = $tableau[0]!="" ? $tableau[0] : 'home';

    if(function_exists($function)){
        unset($tableau[0]);
        if(isset($tableau)){
            if($method =="post"){
                error404();
                die;
            }

            return call_user_func_array($function, $tableau);
        }
            
    }
    else{
        error404();
    }
}

function postMethod($method)
{
    //....Example
    $tableau = explode('/', $method['url']);

    $function = $tableau[0]!="" ? $tableau[0] : 'home';

    if(function_exists($function)){
        unset($tableau[0]);
        
        if(isset($tableau)){
            if($method['url'] ==="updatePost"){
                error404();
                die;
            }
            unset($method['url']);
            $tableau['post'] = $method;
            return call_user_func_array($function, [$tableau]);
        }
            
    }
    else{
        error404();
    }
}

