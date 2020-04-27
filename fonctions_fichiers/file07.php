<?php
    $ressource = fopen('fichier.txt', 'r');
    if ($ressource) {
        while (!feof($ressource)) {
            $buffer = fgets($ressource, 6);
            echo $buffer."<br />";
        }
    }
    fclose($ressource);

