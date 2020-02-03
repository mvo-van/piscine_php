	<html>
	<header>
			<link rel="stylesheet" href="admin.css"> 
	<header>
<body>
	<a href='store.php'> &larr; Retour Aux Achats</a><br/><br/>
<div class="trois_bloc">


<div class="bloc"><h3>MODIFFIER STOCK</h3><br/>
<form method="POST" action="modif_stock.php">
		Nom: <select type="text" name="name" id="name" value="">
		   <?php
		   		$fichier = file_get_contents("datbas/data.base.csv");
			   	$fichier = explode(";\n",$fichier);
			   	foreach($fichier as $key => $elem)
			   	{
				   $lign = explode(",",$elem);
					if($key != 0)
				   		echo "<option value=\"".$lign[2]."\">".$lign[2]."</option>";
			   }
		   ?>
			</select><br/><br/>
		Quantite: <input type="number" name="quant" min=0 value=0><br/><br/>
		Prix: <input type="number" name="prix" min=0 value=0><br/><br/>
		<input type="submit" name="submit" value="VALIDER"/>
</form>
<?php       
	if(isset($_GET['admin']) && ($_GET['admin']=="modif_erreur"))
			echo "<span class=\"erreur\">Erreur de donnee</span>";
	if(isset($_GET['admin']) && ($_GET['admin']=="modif_valider"))
			echo "<span class=\"valide\">Le stock a ete modifie</span>";
	?></div>



<div class="bloc"><h3>SUPPRIMER CATEGORIE</h3><br/>
<form method="POST" action="sup_stock.php">
		Nom: <select name="name">
		   <?php
		   		$fichier = file_get_contents("datbas/data.base.csv");
			   	$fichier = explode(";\n",$fichier);
			   	foreach($fichier as $key => $elem)
			   	{
				   $lign = explode(",",$elem);
					if($key != 0)
				   		echo "<option value=\"".$lign[2]."\">".$lign[2]."</option>";
			   }
		   ?>
			</select><br/><br/>
		<input type="submit" name="submit" value="VALIDER"/>
</form>
<?php       
	if(isset($_GET['admin']) && ($_GET['admin']=="sup_erreur"))
		echo "<span class=\"erreur\">Erreur de donnee</span>";
	if(isset($_GET['admin']) && ($_GET['admin']=="sup_valider"))
		echo "<span class=\"valide\">Le stock a ete modifie</span>";
	?></div>


<div class="bloc bloc_3"><h3>AJOUTER CATEGORIE</h3><br/>
<form method="POST" action="add_stock.php" >
	Nom: <input type="text" name="name" value=""/><br/><br/>	
	Image: <input type="text" name="image" value=""/><br/><br/>
	Quantite: <input type="number" name="quant" min=1 value=1><br/><br/>
	Prix: <input type="number" name="prix" min=1 value=1><br/><br/>
	Categorie:<select type="text" name="cat" id="name" value="">
			<option value="poussin">poussin</option>";
			<option value="caneton">caneton</option>";
			<option value="poules">poules</option>";
			<option value="aliments">aliments</option>";
			<option value="acessoires">acessoires</option>";
	</select><br/><br/>
	Couleur: jaune<input type="checkbox" name="jaune" >
	noir<input type="checkbox" name="noir" >
	blanc<input type="checkbox" name="blanc">
	<br/><br/>
	<input type="submit" name="submit" value="VALIDER"/>
</form>
<?php
	if(isset($_GET['admin']) && ($_GET['admin']=="add_erreur"))
		echo "<span class=\"erreur\">Erreur de donnee</span>";
	if(isset($_GET['admin']) && ($_GET['admin']=="add_valider"))
		echo "<span class=\"valide\">Le stock a ete modifie</span>";
	?></div>



<div class="bloc bloc_3"><h3>SUPPRESSION UTILISATEUR</h3><br/>
<form method="POST" action="sup_utilisateur_admin.php" >
		Identifiant: <input type="text" name="login" value=""/><br/><br/>
		<input type="submit" name="submit" value="VALIDER"/>
</form>
<?php
		if(isset($_GET['admin']) && ($_GET['admin']=="error_sup"))
		echo "<span class=\"erreur\">Erreur de donnee</span>";
if(isset($_GET['admin']) && ($_GET['admin']=="valide_sup"))
		echo "<span class=\"valide\">L'utilisateur a ete supprimec</span>";
	?></div>
</div>
</body></html>

