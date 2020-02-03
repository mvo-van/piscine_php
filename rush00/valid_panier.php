<?php session_start();
	$tab = array();
	if ($_SESSION['caddy'])
		$tab = unserialize ($_SESSION['caddy']);
	$fichier = file_get_contents("datbas/data.base.csv");
	$fichier = explode(";\n",$fichier);
	foreach($tab as $key => $elem)
	{
		$pat = "#" . $key ."#";
		$i = 0;
		foreach($fichier as $k => $e)
		{
			if(preg_match($pat,$e))
				$i = $k;
		}
		$lign = explode(",",$fichier[$i]);
		$fichier[$i] = $lign[0] ."," . $lign[1] ."," . $lign[2] ."," . $lign[3] ."," .($lign[4]-$elem) ."," . $lign[5] ."," . $lign[6] ."," . $lign[7] . "," . $lign[8];
		$_SESSION['caddy']="";
	}
	$fichier = implode (";\n",$fichier);
	file_put_contents ("datbas/data.base.csv", $fichier);
	header('Location: panier.php?panier=valider');
?>