<?php session_start();?>
<html><header><link rel="stylesheet" href="panier.css"><header>
<body>
<br/><a href='store.php'> &larr; Retour Aux Achats</a><br/><br/>

<?php

if($_SESSION['loggued_on_user'] && isset($_GET['panier']) && $_GET['panier'] == "valider")
{
	echo "<div class=\"total\"><br/>PANIER VALIDE<br/>";
}

else
{
	if($_SESSION['loggued_on_user']){
		$tab = array();
		if ($_SESSION['caddy'])
			$tab = unserialize ($_SESSION['caddy']);
	}
	else
	{
		$tab = array();
		if (isset($_COOKIE['caddy']))
			$tab = unserialize ($_COOKIE['caddy']);
	}
	$fichier = file_get_contents("datbas/data.base.csv");
	$fichier = explode(';',$fichier);
	$total = 0;
	foreach($tab as $key => $elem)
	{
		$pat = "#" . $key ."#";
		$lign = preg_grep($pat,$fichier);
		foreach($fichier as $e)
		{
			if(preg_match($pat,$e))
				$lign=$e;
		}
		$lign = preg_split("#,#",$lign);
		echo "<div class=\"affichage\">" . $lign[2] . "<br/><img src=\"" . $lign[3] . "\"><br/>" . "prix unitaire: " . $lign[5] . "$<br/>";
		echo "Quantite : " . $elem . "<br/>" . "prix total: " . $lign[5]*$elem;
		echo "<form method=\"POST\" action=\"sup_panier.php\">";
		echo "<input type=\"submit\" name=\"name\" value=\"SUPPRIMER " .$lign[2]. "\"/>";
		echo "</form>";
		echo "</div>";
		$total += $lign[5]*$elem;
	}
	echo "<div class=\"total\"><br/>TOTAL : " . $total . "$<br/>";
	if($_SESSION['loggued_on_user'] && $total > 0){
		echo "<form method=\"POST\" action=\"valid_panier.php\">";
		echo "<input type=\"submit\" name=\"name\" value=\"VALIDER PANIER\"/>";
		echo "</form>";
	}
	echo "</div>";
}
?>
</body></html>