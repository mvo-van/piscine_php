#!/usr/bin/php
<?PHP
	$rep = "/var/run/utmpx";
	$size = 1256;
	$fd = fopen($rep, "r");
	$fichier = fread($fd, $size);
	date_default_timezone_set('Europe/Paris');
	while($fichier = fread($fd, $size/2)){
		$tab = unpack('a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad',$fichier);
		echo $tab[user] . " " . $tab[line] . "  " . date("M j H:i",$tab[time1]) . "\n";
	}
?>
