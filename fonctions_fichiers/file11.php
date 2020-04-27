<?php
    $ressource = fopen('fichier.txt', 'r+');
    if ($ressource) {
        fwrite($ressource, ' Au revoir Victoria Justice.' );
        rewind($ressource);
        fwrite($ressource, 'A bientot');
    }
    fclose($ressource);