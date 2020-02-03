#!/usr/bin/php
<?PHP
    function ft_split($str)
    {
        $tab = array_filter(explode(" ", $str));
        sort($tab);
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