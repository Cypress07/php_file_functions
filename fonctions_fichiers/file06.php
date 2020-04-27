<?php
    $ressource = fopen('fichier.txt', 'r');
    if (!ressource) {
        echo "Impossible d'ouvrir le fichier fichier.txt";
    }
    while (false!== ($char = fgetc($ressource))){
        echo $char;
    }
    flose ($ressource);