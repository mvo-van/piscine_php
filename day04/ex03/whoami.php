<?php session_start();
    if($_SESSION["loggued_on_user"])
        echo $_SESSION["loggued_on_user"][0]."\n";
    else
        echo "ERROR\n"
?>