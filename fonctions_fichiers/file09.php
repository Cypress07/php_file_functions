<?php
    $ressource = fopen('fichier.txt', 'w');
    if ($ressource) {
        fwrite($ressource, 'Bonjour' .PHP_EOL);
        fwrite($ressource, 'Victoria Justice.');

    }
    fclose($ressource);

