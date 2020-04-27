<?php
    $ressource = fopen('fichier.txt', 'r+');
    if ($ressource) {
        fputs($ressource, 'Au revoir');
        fputs($ressource,' Victoria Justice.');
        echo ftell($ressource);
    }
    fclose($ressource);