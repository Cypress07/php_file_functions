<?php
    $ressource = fopen('fichier.txt', 'r+');
    if (flock($ressource, LOCK_EX)) {
        fwrite($ressource, "Le verrou est maintenant posé.");
        fputs($ressource, LOCK_UN);
    } else {
     echo "Impossible de vrrouiller le fichier !";   
    }
    fclose($ressource);