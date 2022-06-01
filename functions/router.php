<?php
function run($method)
{
    if($method == 'GET'){
       return get($_GET['url']);
    }elseif($method == 'POST'){
      return  post($_POST);
    }
}

function get($method)
{
    $tab = explode('/', $method);

    $function = $tab[0]!="" ? $tab[0] : 'home';

    if(function_exists($function))
    {
        unset($tab[0]);
        
    
        if(isset($tab))
        {
            // var_dump($function);die;
            if((($function !="post") && (!empty($tab))) ||($function =="post") && (empty($tab))){
               error404();
               die;
            }

            return call_user_func_array($function, $tab);
        
        }
            
    }
    else
    {
        error404();
    }
}

// function post($method)
// {

// }

