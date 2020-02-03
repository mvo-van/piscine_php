<?php session_start();
	$tab = array();
	$fichier = file_get_contents("datbas/data.base.csv");
	$fichier = explode(";\n",$fichier);
	$pat = "#" . $_POST['name'] ."#";
	$i = 0;
	foreach($fichier as $k => $e)
	{
		if(preg_match($pat,$e))
			$i = $k;
	}
	$lign = explode(",",$fichier[$i]);
	if($_POST['quant'] > 0)
		$lign[4]=$_POST['quant'];
	if($_POST['prix'] > 0)
		$lign[5]=$_POST['prix'];
	if(($_POST['quant'] == 0) && ($_POST['prix'] == 0))
		header('Location: admin.php?admin=modif_erreur');
	else{
		$fichier[$i] = $lign[0] ."," . $lign[1] ."," . $lign[2] ."," . $lign[3] ."," . $lign[4] ."," . $lign[5] ."," . $lign[6] . "," . $lign[7] . "," . $lign[8];
		$fichier = implode (";\n",$fichier);
		file_put_contents ("datbas/data.base.csv", $fichier);
		header('Location: admin.php?admin=modif_valider');
	}
?>