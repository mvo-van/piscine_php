<?php
    function ft_is_sort($tab)
    {
        $sort = $tab;
        sort($sort);
        $i = 0;
        while($sort[$i] && $tab[$i])
        {
            if($sort[$i] != $tab[$i])
                return 0;
            $i++;
        }
        return 1;
    }
?>