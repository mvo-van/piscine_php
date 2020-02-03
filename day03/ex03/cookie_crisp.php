<?php
    if ($_GET['action'] && $_GET['action']=="set")
        setcookie($_GET['name'],$_GET['value'],time()+3600*24*3);
    else if ($_GET['action'] && $_GET['action']=="get")
    {
        if ($_COOKIE[$_GET['name']])
            echo $_COOKIE[$_GET['name']]."\n";
    }
        else if ($_GET['action'] && $_GET['action']=="del")
        setcookie($_GET['name'],NULL,time()-100);
?>