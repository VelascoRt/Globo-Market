<?php
    $usuario    = "edswbxadmin";
    $contrasena = "]&wEsIUz_5-c";

    $conexion = new PDO('mysql:host=localhost;dbname=globo_market', $usuario, $contrasena) or die(mysqli_error());
    $conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION PDO: :ATTR_EMULATE_PREPARES => false);

?>