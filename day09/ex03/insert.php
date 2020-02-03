<?php
    if(file_exists("list.csv")){
        $fichier = file_get_contents("list.csv");
        $fichier = unserialize($fichier);}
    if($fichier == false)
        $fichier = array();
    array_push($fichier, $_POST['new']);
    file_put_contents("list.csv",serialize($fichier));
    echo json_encode($fichier);
?>