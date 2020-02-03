<?php session_start();
    include ('auth.php');
    $f = auth($_GET['login'],$_GET['passwd']);
    if ($f == TRUE)
    {
        $_SESSION['loggued_on_user'] = array($_GET['login'],$_GET['passwd']);
        echo "OK\n";
    }
    else
    {
        echo "ERROR\n";
        $_SESSION['loggued_on_user'] = "";
    }
?>