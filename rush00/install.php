<?php
session_start();
$_SESSION['logged_on_user'] = NULL;
$_SESSION['connexion'] = NULL;
$path = "./private";
$file = $path."/passwd";
$tab = array();
if (!file_exists($path))
{
  mkdir ($path);
}
  /*$my_file = unserialize(file_get_contents($file));*/

  $tab[0]['login'] = 'admin';
  $tab[0]['passwd'] = hash('whirlpool', "maii");

  $serialized = serialize($tab);
  file_put_contents($file, $serialized);
include("store_databas.php");

$file_cat = $path."/categories";
if (!file_exists($file_cat))
{
  $my_file_cat = fopen("$file_cat", "x");

  $tab_cat[cat1][0] = 'poussins';
  $tab_cat[cat1][1] = 'canetons';
  $tab_cat[cat1][2] = 'poules';
  $tab_cat[cat1][3] = 'aliments';
  $tab_cat[cat1][4] = 'acessoires';
  $serialized_cat[] = serialize($tab_cat);
  file_put_contents($file_cat, $serialized_cat);
}
//echo "<meta http-equiv='refresh' content='0,url=index.php'>";
?>