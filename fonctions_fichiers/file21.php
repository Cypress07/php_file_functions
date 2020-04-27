<?php
    if ($pointeur = opendir('.')){
        while ($fichier = readdir($pointeur)){
            if ($fichier != "." && $fichier != ".."){
                echo $fichier." de type ".filetype($fichier). "<br />";
            }
        }
        closedir($pointeur);
    }