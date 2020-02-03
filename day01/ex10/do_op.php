#!/usr/bin/php
<?PHP
    if($argc == 4)
    {
       $nb1 = str_replace(" ","",$argv[1]);
        $nb2 = str_replace(" ","",$argv[3]);
        $op = str_replace(" ","",$argv[2]);
        $nb1 = str_replace("\t","",$nb1);
        $nb2 = str_replace("\t","",$nb2);
        $op = str_replace("\t","",$op);
        if($op[0] == "+")
            echo $nb1 + $nb2;
        elseif($op[0] == "-")
            echo $nb1 - $nb2;
        elseif($op[0] == "*")
            echo $nb1 * $nb2;
        elseif($op[0] == "/")
            echo $nb1 / $nb2;
        elseif($op[0] == "%")
            echo $nb1 % $nb2;
    }
    else
        echo "Incorrect Parameters";
	echo "\n";
?>