<?PHP
    function ft_split($str)
    {
        $i = 0;
        $j = 0;
        $tab = explode(" ", $str);
        $i = count($tab);
        sort($tab);
        while($j < $i && !($tab[$j]))
        {
            array_shift($tab);
            $i--;
        }
        return $tab;
    }
?>
