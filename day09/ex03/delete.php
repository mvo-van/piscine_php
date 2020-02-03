<?php     
    if(file_exists("list.csv")){
        $fichier = file_get_contents("list.csv");
        $fichier = unserialize($fichier);
        array_splice($fichier,$_POST['index'],1);
        file_put_contents("list.csv",serialize($fichier));
        echo json_encode($fichier);
    }
?>