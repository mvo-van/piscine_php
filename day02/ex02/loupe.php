#!/usr/bin/php
<?PHP
	while($text=fgets(STDIN))
		$fichier .= $text;
	//echo $fichier;
	$i=0;
	$tab = array();
	$tab_base = array();
	$j=0;
	$t = array();
	$t_base = array();
	$title = array();
	$title_base = array();
	preg_match_all ("#<a.*>.*</a>#s",$fichier,$tab_base,PREG_PATTERN_ORDER);
	preg_match_all ("#<a.*>.*</a>#s",$fichier,$tab,PREG_PATTERN_ORDER);
	while($tab[0][$i]){
		$j=0;
		preg_match_all ("#>[^<>]+<#s",$tab[0][$i],$t_base,PREG_PATTERN_ORDER);
		preg_match_all ("#>[^<>]+<#s",$tab[0][$i],$t,PREG_PATTERN_ORDER);
		while($t[0][$j]){
			$t[0][$j] = strtoupper($t[0][$j]);
			$tab[0][$i] = str_replace($t_base[0][$j],$t[0][$j],$tab[0][$i]);
			$j++;
		}
		$j=0;
		preg_match_all ("#title=\".*\"#",$tab[0][$i],$title_base,PREG_PATTERN_ORDER);
		preg_match_all ("#title=\".*\"#",$tab[0][$i],$title,PREG_PATTERN_ORDER);
		while($title[0][$j]){
			$title[0][$j] = strtoupper($title[0][$j]);
			$title[0][$j] = preg_replace ("#^TITLE#", "title",$title[0][$j]);
			$tab[0][$i] = str_replace($title_base[0][$j],$title[0][$j],$tab[0][$i]);
			$j++;
		}
		$fichier = str_replace($tab_base[0][$i],$tab[0][$i],$fichier);
		$i++;
	}
	echo $fichier;
?>
