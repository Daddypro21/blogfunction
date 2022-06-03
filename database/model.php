<?php
require "getPdo.php";

// //Exemple
// function findById($table=null,$id=null)
// {
//     $req = getPdo()->prepare("SELECT * FROM $table WHERE id=?");
//     $req->execute([$id]);
//     return $req->fetch();
// }

// function getAll($table)
// {
//     $req = getPdo()->query("SELECT * FROM $table ORDER BY id DESC");  
//     $data = $req->fetchAll() ;
//     return $data;
// }



/*
    fonction permettant d'afficher toutes les informations ou une seule information specifique

    si aucune id n'est fourni nous retournons toutes les informations dans le cas contraire l'information de l'identifiant specifié sera retourné
    
    si l'id inséré n'existe pas dans la base de donnée un tableau vide sera renvoyé
    */
function getOneOrAll(string $table,$id=null)
{
    if($id===null)
    {
        $getPosts = getPdo()->query("SELECT * FROM $table ORDER BY id DESC");

        $data = $getPosts->fetchAll();

        return $data;
    }
    else
    {
        $getPost = getPdo()->prepare("SELECT * FROM $table WHERE id=:id");

        $getPost->execute(['id'=>$id]);

        $data = $getPost->fetch();

        return $data = $data===false ? [] : $data;

        
    }
}

/*

fonction permettant d'afficher plusieurs informations en fonction des informations passées dans le tableau

*/
function findAll(string $table, array $tableau)
{
   $keys = [];
   
       foreach($tableau as $key=>$value)
    {
        $keys [$key]= $key.'=:'.$key;
    }

    $keys = implode(' and ', $keys);
    
    //return var_dump($keys);

    $getPost = getPdo()->prepare("SELECT * FROM $table WHERE $keys");

        $getPost->execute($tableau);

        $data = $getPost->fetchAll();

        return $data;
}

/*

fonction permettant l'ajout dans la base de donnée.

reçoit en parametre une table et un tableau.

le tableau permet de spécifier les informations à inserer dans la base de donnée

*/

function create(string $table, array $tableau)
{

    $keys = [];

    $values = [];
    
    foreach($tableau as $key=>$value)
    {
        $keys[$key] = $key;
    
        $values[$key] = ':'.$key;
    }
    
    $keys = implode(', ', $keys);
    
    $values = implode(', ', $values);    
    
    $sql = "INSERT INTO $table($keys) VALUES ($values)";
    
    $data = getPdo()->prepare($sql);
    
    $response = $data->execute($tableau);

    if($response)
    {
        return 'ajout effectué avec succès';
    }
}


