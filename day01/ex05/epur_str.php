#!/usr/bin/php
<?PHP
    function ft_epur($argv){
        $i = 0;
        $j = 0;
        while($argv[$i])
        {
            if($argv[$i] == "\t")
                $argv[$i] = " ";
            if($argv[$i] == " ")
            {
                if($argv[$i+1] && $argv[$i+1] == "\t")
                    $argv[$i+1] = " ";
                while($argv[$i + 1] && ($argv[$i + 1] == " "))
                {
                    $prev = substr($argv, 0, $i);
                    if($argv[$i+2])
                        $next = substr($argv, $i+1, strlen($argv)-$i-1);
                    else
                        $next = "";
                    $argv = $prev .$next ;
                    if($argv[$i+1] && $argv[$i+1] == "\t")
                        $argv[$i+1] = " ";
                }
            }
            $i++;    
        }
        if($argv[strlen($argv)-1] == " " || $argv[strlen($argv)-1] == "\t")
            $argv = substr($argv, 0, strlen($argv)-1);
        if($argv[0] == " " || $argv[0] == "\t")
            $argv = substr($argv, 1, strlen($argv)-1);
        return($argv);
    }
    if($argc > 1)
       echo ft_epur($argv[1]) . "\n";
?>