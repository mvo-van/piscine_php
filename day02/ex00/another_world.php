#!/usr/bin/php
<?PHP
    if($argc > 1)
    {
        $tab=preg_replace("/[ \t]+/", " ",$argv[1]);
        $tab=preg_replace("/^[ \t]/", "",$tab);
        $tab=preg_replace("/[ \t]$/", "",$tab);
        echo "$tab\n";
    }
?>