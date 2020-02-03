<?php

	$data = file("datbas/data.base.csv");
	unset($data[0]);

	foreach ($data as $elem)
	{
		$line = explode(",", $elem);
		$infos_bdd[] = $line;
	}

	$allata = serialize($infos_bdd);

	file_put_contents("datbas/serialized", $allata);

?>
