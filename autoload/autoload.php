<?php

/**
 * autoloading des fonctions
 */


function autoload()
{
    foreach(scandir('../functions') as $fichier) {
   
        if(preg_match("#.php$#", $fichier)){
       
            require __DIR__.'/../functions/'.$fichier;
           
        }

    }
    require "../functions/view/view.php";
}
autoload();