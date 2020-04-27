<?php
    $ressource = fopen('fichier.txt', 'r');
    if ($ressource) {
        $contenu = fread($ressource, 10000);
        echo $contenu;
    }
    fclose($ressource);
