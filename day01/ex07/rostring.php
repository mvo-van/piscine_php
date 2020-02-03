#!/usr/bin/php
<?PHP
    function ft_split($str)
    {
        $i = 0;
        $j = 0;
        $tab = explode(" ", $str);
        $i = count($tab);
        while($j < $i && !($tab[$j]))
        {
            array_shift($tab);
            $i--;
        }
        return $tab;
    }

    if($argc > 1)
    {
        $tab = ft_split($argv[1]);
        $save = $tab[0];
        array_shift($tab);
        foreach($tab as $elem)
            echo "$elem ";
        echo $save . "\n";
    }
?>