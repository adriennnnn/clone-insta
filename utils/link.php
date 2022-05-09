<?php
try
    {
        $bdd = new PDO('mysql:host=141.94.22.233;dbname=portfolio_adrien', getenv('USERNAME'), getenv('PASSWORD'), [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    }
    catch(Exception $e)
    {
        var_dump($e);
        die('Erreur : '.$e->getMessage());
    }

?>