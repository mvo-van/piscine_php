#!/usr/bin/php
<?PHP
    function cmp($cmp1, $cmp2)
    {
        $i = 0;
        $cmp = 0;
        $cmp1 = strtoupper($cmp1);
        $cmp2 = strtoupper($cmp2);
        while($cmp1[$i] && $cmp2[$i] && ($cmp1[$i] == $cmp2[$i]))
            $i++;
        if(!($cmp1[$i]))
            return -1;
        if(!($cmp2[$i]))
            return 1;
        if(ctype_alpha($cmp1[$i]) || ctype_alpha($cmp2[$i]))
        {
            if(ctype_alpha($cmp1[$i]) && (ctype_alpha($cmp2[$i])))
            {
                if($cmp1[$i] < $cmp2[$i])
                    return -1;
                else if($cmp1[$i] > $cmp2[$i])
                    return 1;
            }
            else if(ctype_alpha($cmp1[$i]))
                return -1;
            else
                return 1;
        }
        else if(ctype_digit($cmp1[$i]) || ctype_digit($cmp2[$i]))
        {
            if(ctype_digit($cmp1[$i]) && (ctype_digit($cmp2[$i])))
            {
                if($cmp1[$i] < $cmp2[$i])
                    return -1;
                else if($cmp1[$i] > $cmp2[$i])
                    return 1;
            }   
            else if(ctype_digit($cmp1[$i]))
                return -1;
            else
                return 1; 
        }
        else
            {
                if($cmp1[$i] < $cmp2[$i])
                    return -1;
                if($cmp1[$i] > $cmp2[$i])
                    return 1;
            }
        return $cmp;
    }
    function ft_split($str)
    {
        $tab = array_filter(explode(" ", $str));
        usort($tab, "cmp");
        return $tab;
    }
    $i = 1;
    $tab = NULL;
    while( $i < $argc)
    {
        $tab = $tab . " " . $argv[$i];
        $i++;
    } 
    $tab = ft_split($tab);
    foreach($tab as $elem)
        echo "$elem\n";
?>