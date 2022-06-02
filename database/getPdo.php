<?php

function getPdo()
{

    return  $db = new PDO("mysql:dbname=blogfunction;host=localhost",
    "root","",[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
}