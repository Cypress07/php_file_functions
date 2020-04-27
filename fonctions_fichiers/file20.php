<?php
    if ($pointeur = opendir('.')){
        while ($fichier = readdir($pointeur)){
            if ($fichier != "." && $fichier != ".."){
                echo "$fichier <br />";
            }
        }
        closedir($pointeur);
    }