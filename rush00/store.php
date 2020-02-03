<?php session_start();?>
<html>
    <head>
        <link rel="stylesheet" href="site.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title></title>
    </head>
    <body>
    <div>
        <nav>
            <ul id="menu">
                <li><a id="type" href="store.php?">CATEGORIE</a>
                    <ul>
						<a href="store.php?cat=poussin" name="poussin" value="affiche"><li>poussins</li></a>
                        <a href="store.php?cat=caneton" name="caneton" value="affiche"><li>canetons</li></a>
                        <a href="store.php?cat=poules" name="poules" value="affiche"><li>poules</li></a>
						<a href="store.php?cat=aliments" name="aliments" value="affiche"><li>aliments</li></a>
						<a href="store.php?cat=acessoires" name="acessoires" value="affiche"><li>acessoires</li></a>
                        <a href="store.php?cat=jaune" name="jaune" value="affiche"><li>jaune</li></a>
                        <a href="store.php?cat=noir" name="noir" value="affiche"><li>noir</li></a>
                        <a href="store.php?cat=blanc" name="blanc" value="affiche"><li>blanc</li></a>
						
                    </ul>
                </li>
            </ul>
        </nav>
        
        <div>
        <a href="index.php"> <i class="img_home fa" style="font-size:80px">&#xf015;</i></a>
            <a HREF="panier.php"><img class="img_cadi" SRC="https://www.green-escape.fr/wp-content/uploads/2012/10/caddie.gif" title="reload"></a>
            
            <?php 
                if($_SESSION['loggued_on_user']=="admin")
                    echo '<button class="adm" type="submit" name="submit"> <a href="admin.php">admin</a></button>';
                if($_SESSION['loggued_on_user'])
                {
                    echo '<button class="deconexion" type="submit" name="submit"> <a href="deconexion.php">'.$_SESSION['loggued_on_user'].'<br/>deconexion </a></button>';
                }
                else
                    echo '<button class="conexion" type="submit" name="submit" ><a HREF="page_utilisateur.php">conexion</a> </button>';
            ?>
            </div>
	</div>
	<?php 
		$pat = "#.*[10],[10],[10]$#";
		if (isset($_GET['cat'])){
			if($_GET['cat'] == "jaune")
				$pat = "#.*1,[10],[10]$#";
			else if($_GET['cat'] == "noir")
				$pat = "#.*[10],1,[10]$#";
			else if($_GET['cat'] == "blanc")
				$pat = "#.*[10],[10],1$#";
			else if($_GET['cat'] == "acessoires" || $_GET['cat'] == "aliments" || $_GET['cat'] == "poules" || $_GET['cat'] == "poussin" || $_GET['cat'] == "caneton")
				$pat = "#[0-9]*," . $_GET['cat'] . ".*#";
		}
		$fichier = file_get_contents("datbas/data.base.csv");
		$fichier = explode(';',$fichier);
		$tab = preg_grep($pat,$fichier);
		foreach($tab as $elem)
		{
			$elem = explode(',',$elem);
			echo "<div class=\"affichage\">" . $elem[2] . "<br/><img src=\"" . $elem[3] . "\"><br/>" . "prix : " . $elem[5] . "$<br/>";
			echo "<form method=\"POST\" action=\"add_caddy.php\">";
			echo "Quantite : <input type=\"number\" name=\"quant\" min=0  max=\"" . $elem[4] . "\" value=\"0\"><br/><br/>";
            echo "<input type=\"submit\" name=\"name\" value=\"AJOUTER " .$elem[2]. "\"/>";
			echo "</form></div>";
		}
	?>
</body></HTML>
