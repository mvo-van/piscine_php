#!/usr/bin/php
<?PHP
if($argc > 1){
	$page = file_get_contents($argv[1]);
	$name_page = preg_replace("#^http://|^https://#","",$argv[1]);
	if(!file_exists ($name_page."/")){
		mkdir ($name_page);}
	$tab=array();
	$img=array();
	preg_match_all ("#<img.*>#i",$page,$tab,PREG_PATTERN_ORDER);
	$i = 0;
	while($tab[0][$i])
	{
		preg_match_all ("#src=\"[^\"]*\"#",$tab[0][$i],$img,PREG_PATTERN_ORDER);
		$img[0][0] = preg_replace ("#^src=\"|\"$#","",$img[0][0]);
		if(!(preg_match("#^/#",$img[0][0])))
		{
			$name = preg_replace ("#^.*/|/.*/#","",$img[0][0]);
			file_put_contents($name_page."/".$name, file_get_contents($img[0][0]));
		}
		$i++;
	}
}
?>