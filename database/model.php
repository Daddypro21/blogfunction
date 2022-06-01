<?php
require "getPdo.php";

//Exemple
function getId($table=null,$id=null)
{
    $req = getPdo()->prepare("SELECT * FROM $table WHERE id=?");
    $req->execute([$id]);
    return $req->fetchAll();
}
