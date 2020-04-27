<?php
    
$tableau = file('fichier.txt');
foreach ($tableau as $line) {
    echo $line."<br />";
}