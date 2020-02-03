<?php
    if(file_exists("list.csv")){
        $fichier = file_get_contents("list.csv");
        $fichier = unserialize($fichier);
        echo json_encode($fichier);
    }
?>