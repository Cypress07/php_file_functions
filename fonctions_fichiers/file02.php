<?php
    $fichier = 'fichier.txt' ;
    $size = readfile($fichier);
    echo "<br /> Le nombre de caractères du fichier est : ".$size;