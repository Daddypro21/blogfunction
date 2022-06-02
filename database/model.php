<?php
require "getPdo.php";

//Exemple
function findById($table=null,$id=null)
{
    $req = getPdo()->prepare("SELECT * FROM $table WHERE id=?");
    $req->execute([$id]);
    return $req->fetch();
}

function getAll($table)
{
    $req = getPdo()->query("SELECT * FROM $table ORDER BY id DESC");  
    $data = $req->fetchAll() ;
    return $data;
}


