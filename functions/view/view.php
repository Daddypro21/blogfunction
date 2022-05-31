<?php

function view($view,$data=null)
{
    /**
     * cette fonction permet d'appeler une vue.
     *elle reçoit en parametre deux variables, 
     *la premiere la vue et la seconde les valeurs à passer.
     */

    if($data !==null)
    {
        extract($data);
    }
    
    require "./../view/{$view}.php";
}