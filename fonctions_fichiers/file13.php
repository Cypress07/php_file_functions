<?php
    $ressource = fopen('fichier.txt', 'r+');
    if ($ressource) {
        fputs($ressource, 'Au revoir');
        fseek($ressource, 0);
        fputs($ressource, 'Victoria Justice');
    }
    fclose($ressource);