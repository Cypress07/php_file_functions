<?php
    $directoty = dir("../test");
    echo "Pointeur :" .$directory->handle . "<br />";
    echo "Chemin :" .$directory->path . "<br />";
    while ($entry = $directory->read()){
        echo $entry . "<br/>";
    }
    $directory->close();
