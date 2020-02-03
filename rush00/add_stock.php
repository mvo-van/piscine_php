<?php session_start();
	$tab = array();
	$fichier = file_get_contents("datbas/data.base.csv");
	$fichier = explode(";\n",$fichier);
	if($_POST['name'])
	{
		$i = 0;
		foreach($fichier as $k => $e)
			$i++;
		if($_POST['jaune'])
			$_POST['jaune'] = 1;
		else	
			$_POST['jaune'] = 0;
		if($_POST['noir'])
			$_POST['noir'] = 1;
		else	
			$_POST['noir'] = 0;
		if($_POST['blanc'])
			$_POST['blanc'] = 1;
		else	
			$_POST['blanc'] = 0;

		$lign = explode(",",$fichier[$i - 1]);
		$add = ($lign[0]+1) ."," . $_POST['cat'] ."," . $_POST['name'] ."," . $_POST['image'] ."," . $_POST['quant'] ."," . $_POST['prix'] ."," . $_POST['jaune'] . "," . $_POST['noir'] . "," . $_POST['blanc'];
		$fichier[] = $add;
		$fichier = implode (";\n",$fichier);
		file_put_contents ("datbas/data.base.csv", $fichier);
		header('Location: admin.php?admin=add_valider');
	}
	else
		header('Location: admin.php?admin=add_erreur');
?>