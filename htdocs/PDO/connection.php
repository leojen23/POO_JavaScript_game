<?php
session_start();
try
{

    $db = new PDO('mysql:host=127.0.0.1;dbname=product_hunt;charset=utf8','root','', [
 
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ]);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


?>