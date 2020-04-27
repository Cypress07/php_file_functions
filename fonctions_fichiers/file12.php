<?php
    $ressource = fopen('fichier.txt', 'r+');
    if ($ressource) {
        fputs($ressource, 'Au revoir');
        fputs($ressource, ' Victoria Justice.');
    }
    fclose($ressource);