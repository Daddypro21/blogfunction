<?php

function getPdo()
{
    // define("DBNAME","blogfunction");
    // define("HOST","localhost");
    // define("USERNAME","root");
    // define("PASSWORD","");


    return  $db = new PDO("mysql:dbname=blogfunction;host=localhost",
    "root","",[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
}