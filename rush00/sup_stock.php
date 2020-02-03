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
	if($fichier[$i]){
		unset($fichier[$i]);
		$fichier = implode (";\n",$fichier);
		file_put_contents ("datbas/data.base.csv", $fichier);
		header('Location: admin.php?admin=sup_valider');
	}
	else
		header('Location: admin.php?admin=sup_erreur');
?>