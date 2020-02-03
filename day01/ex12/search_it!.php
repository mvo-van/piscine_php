#!/usr/bin/php
<?PHP
    $tab = array();
    if($argc > 1)
        $ref = $argv[1];
    if($argc > 2)
    {   
        $i = 2;
        while($argv[$i])
        {   
            $tmp = explode(":", $argv[$i]);
            $tab[$tmp[0]] = $tmp[1];
            $i++;
        }
        if(array_key_exists ($ref , $tab ))
            echo "$tab[$ref]" . "\n";
    }
?>