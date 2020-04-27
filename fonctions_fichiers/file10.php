<?php
    $ressource = fopen('fichier.txt', 'a');
    if ($ressource) {
        fwrite($ressource, ' Au revoir.' );
    }
    fclose($ressource);