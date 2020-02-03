#!/usr/bin/php
<?PHP
    function cmp_nb($src)
    {
        $i = strlen($src) - 2;
        $tab_nb = "01523456789";
        $j = 0;
        $pair = -1;
        while($i >= 0){
            $nb = 0;
            $j = 0;
            while($j <= 10 ){
                if($src[$i] == $tab_nb[$j])
                {
                    
                    $nb = 1;
                    $div = $src[$i] + 1;
                    if(($i == strlen($src) - 2) && $div%2)
                        $pair = 1;
                    else if(($i == strlen($src) -2))
                        $pair = 0;
                }
                $j++;
            }
            if($nb == 0)
                return -1;
            $i--;
        }
        return $pair;
    }
    $i = 1;
    while($i){
        echo "Entrez un nombre: ";
        $nom=fgets(STDIN);
        if(!$nom)
            $i = 0;
        else{
            $cmp = cmp_nb($nom);
            $nom[strlen($nom) - 1] = "\0";
            if($cmp == 1)
                echo "Le chiffre $nom est Pair";
            else if($cmp == 0)
                echo "Le chiffre $nom est Impair";
            else
                echo "'$nom' n'est pas un chiffre";
        }
        echo "\n";
    }
?>