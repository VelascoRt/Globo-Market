<?php

    $usuario    = "edswbxadmin";
    $contrasena = "]&wEsIUz_5-c";
    try{
        $conn = new PDO('mysql:host=localhost;dbname=globo_market', $usuario, $contrasena);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
            {
                echo "ERROR: " . $e->getMessage();
            }
            
?>