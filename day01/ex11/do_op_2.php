#!/usr/bin/php
<?PHP
    function ft_sinb($nb)
    {
        $i = 0;
        if($nb[$i] == "-")
            $i++;
        $n = substr($nb, $i, strlen($nb)-$i);

            if(ctype_digit($n))
                return 1;
            else
                return 0;
    }

        if($argc == 2)
        {
            $op = str_replace(" ","",$argv[1]);
            $op = str_replace("\t","",$op);
            $i=0;
            $sng=NULL;
            if($op[$i] == "-")
                $i++;
            while($op[$i] && ( $op[$i] != "+" && $op[$i] != "-" && $op[$i] != "*" && $op[$i] != "/" && $op[$i] != "%"))
                $i++;
            if($op[$i])
                $sgn = $op[$i];
            $nb1 = substr($op, 0, $i);
            $nb2 = substr($op, $i+1, strlen($op)-$i-1);
            if(!(ft_sinb($nb1)) || !(ft_sinb($nb2)))
                echo "Syntax Error";
            else if(!($sgn) || !($nb2))
                echo $nb1;
            else{
                if($sgn == "+")
                    echo $nb1 + $nb2;
                elseif($sgn == "-")
                    echo $nb1 - $nb2;
                elseif($sgn == "*")
                    echo $nb1 * $nb2;
                elseif($sgn == "/")
                    echo $nb1 / $nb2;
                elseif($sgn == "%")
                    echo $nb1 % $nb2;}
        }
        else
			echo "Incorrect Parameters";
	echo "\n";
?>