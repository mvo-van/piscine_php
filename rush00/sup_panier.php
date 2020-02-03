<?php session_start();

$nom = str_replace ("SUPPRIMER ","", $_POST['name']);
if($_SESSION['loggued_on_user']){
	$tab = array();
	if ($_SESSION['caddy'])
		$tab = unserialize ($_SESSION['caddy']);
	if($tab[$nom])
		unset($tab[$nom]);
	$str = serialize($tab);
	$_SESSION['caddy'] = $str;
}
else
{
	$tab = array();
	if ($_COOKIE['caddy'])
		$tab = unserialize ($_COOKIE['caddy']);
	if($tab[$nom])
		unset($tab[$nom]);
	$str = serialize($tab);
	setcookie("caddy",$str,time()+3600*24*3);
}
header('Location: panier.php');
?>