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

    /**
     * Ce fichier a été déplacé dans un dossier different,raison pour laquelle
     *elle n'est pas pris en charge dans la boucle foreach et n'est pas appélé
     *dynamiquement...ce problème sera résolu,car nous continuons à travailler
     *sur le projet
     */
    
    require "../functions/view/view.php";
}
autoload();