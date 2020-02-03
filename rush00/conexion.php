<?php session_start();
include('auth.php');
    $f = auth($_POST['login'],$_POST['passwd']);
    if ($f == TRUE)
    {
        $_SESSION['conexion'] = "yes";
		$_SESSION['loggued_on_user'] = $_POST['login'];
		if($_COOKIE['caddy'])
		{
			$_SESSION['caddy']=$_COOKIE['caddy'];
			setcookie("caddy",NULL,time()-100);
		}
			header("Location: index.php?");
    }
    else
    {
        header("Location: page_utilisateur.php?conexion=error_co");
        $_SESSION['loggued_on_user'] = "";
    }
?>