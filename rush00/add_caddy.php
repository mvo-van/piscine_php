<?php session_start();

$nom = str_replace ("AJOUTER ","", $_POST['name']);
if($_SESSION['loggued_on_user']){
	$tab = array();
	if ($_SESSION['caddy'])
		$tab = unserialize ($_SESSION['caddy']);
	$tab[$nom] = $_POST['quant'];
	if($_POST['quant'] == 0)
		unset($tab[$nom]);
	$str = serialize($tab);
	$_SESSION['caddy'] = $str;
}
else
{
	$tab = array();
	if ($_COOKIE['caddy'])
		$tab = unserialize ($_COOKIE['caddy']);
	$tab[$nom] = $_POST['quant'];
	if($_POST['quant'] == 0)
		unset($tab[$nom]);
	$str = serialize($tab);
	setcookie("caddy",$str,time()+3600*24*3);
}
header('Location: store.php');
?>