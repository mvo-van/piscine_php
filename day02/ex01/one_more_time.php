#!/usr/bin/php
<?PHP

    date_default_timezone_set("Europe/Paris");
    function ft_jour($jour)
    {
        if(preg_match('/^[Ll]undi$/',$jour))
            return "Monday";
        else if(preg_match('/^[Mm]ardi$/',$jour))
            return "Tuesday";
        else if(preg_match('/^[Mm]ercredi$/',$jour))
            return "Wednesday";
        else if(preg_match('/^[Jj]eudi$/',$jour))
            return "Thursday";
        else if(preg_match('/^[Vv]endredi$/',$jour))
            return "Friday";
        else if(preg_match('/^[Mm]ercredi$/',$jour))
            return "Saturday";
        else if(preg_match('/^[Dd]imanche$/',$jour))
            return "Sunday";
        return 0;
    }
    function ft_num($num)
    {
        if(preg_match('/^[0-3][0-9]$/',$num))
            return $num;
        return 99;
    }
    function ft_mois($mois)
    {
        if(preg_match('/^[Jj]anvier$/',$mois))
            return 1;
        else if(preg_match('/^[Ff][eé]vrier$/',$mois))
            return 2;
        else if(preg_match('/^[Mm]ars$/',$mois))
            return 3;
        else if(preg_match('/^[Aa]vril$/',$mois))
            return 4;
        else if(preg_match('/^[Mm]ai$/',$mois))
            return 5;
        else if(preg_match('/^[Jj]uin$/',$mois))
            return 6;
        else if(preg_match('/^[Jj]uiller$/',$mois))
            return 7;
        else if(preg_match('/^[Aa]o[uû]t$/',$mois))
            return 8;
        else if(preg_match('/^[Ss]eptembre$/',$mois))
            return 9;
        else if(preg_match('/^[Oo]ctobre$/',$mois))
            return 10;
        else if(preg_match('/^[Nn]ovembre$/',$mois))
            return 11;
        else if(preg_match('/^[Dd][eé]sembre/',$mois))
            return 12;
        return 0;
    }
    if($argc > 1)
    {
        $tab = preg_split('/[: ]+/',$argv[1]);
        $i=0;
        while($tab[$i])
            $i++;
        if($i != 7)
            echo "Wrong Format\n";
        else
        {
            $jour = ft_jour($tab[0]);
            $num = ft_num($tab[1]);
            $mois = ft_mois($tab[2]);
            $annee = $tab[3];
            $heure = $tab[4];
            $min = $tab[5];
            $sec = $tab[6];
            if(!(checkdate ($mois,$num,$annee)))
                echo "Wrong Format\n";
            else if(!($time = mktime($heure,$min,$sec,$mois,$num,$annee)))
                echo "Wrong Format\n";
            else if(!(date('l',$time) == $jour))
                echo "Wrong Format\n";
            else
                echo "$time\n";
        }    
    }
?>