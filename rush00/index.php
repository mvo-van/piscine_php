<?php
include("install.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>PiouPiou</title>
    <link type="text/css" rel="stylesheet" href="struct.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body class="element-flexible" style="background-color:#e2ecc3;">
<div>
    <nav>
        <ul>
            <li><a href="store.php" title="Boutique">Boutique</a></li>
            <li class="submenu"><a href="#" title="Produits">Produits</a>
        <ul>
            <li class="submenu"><a href="#" title="Nos Volailles">Nos Volailles</a>
        <ul>
            <li><a href="store.php?cat=poussin" title="Poussins">Poussins</a></li>
            <li><a href="store.php?cat=caneton" title="Canetons">Canetons</a></li>
            <li><a href="store.php?cat=poules" title="Poules">Poules</a></li>
        </ul>
            </li>
            <li class="submenu"><a href="#" title="Autres">Autres</a>
        <ul>
			<li><a href="store.php?cat=aliments" title="Aliments">Aliments</a></li>
            <li><a href="store.php?cat=acessoires" title="">Acessoires</a></li>
            </li>
        </ul>
        </ul>
            </li>
            <?php
            if (!($_SESSION['logged_on_user']))
            {
                echo"<li><a href='page_utilisateur.php'>Connexion</a></li>";
                echo '<li><a href="/page_utilisateur.php" title="S\'inscire">S\'inscire</a></li>';
            }
            if($_SESSION['loggued_on_user']=="admin")
                echo '<li><a style="background-color:#4096ee"; href="/admin.php" title="Espace ADM">espace admin</a></li>';
            else if ($_SESSION['loggued_on_user'])
                echo '<li><a href="/page_utilisateur.php" title="Espace client">espace client</a></li>';
            if($_SESSION['loggued_on_user'])
                echo'<li><a style="background-color:#4096ee"; href="/deconexion.php">Deconnexion</a></li>';
?>
        </ul>
        <a id= "tm" href="/panier.php">Cadit<i class='fas fa-cart-arrow-down' style='font-size:30px;''></i></a>
        <a id= "tc" href="#about" title="Coups de coeur"><i class='fas fa-heart' style='font-size:24px'></i></a>
        </nav>
</div>
    <div class="recherche_p" align="center">
        <form action="/search" id="searchthis" method="get">
            <input id="search" name="q" type="text" placeholder="Rechercher">
        <br/>
            <input id="search-btn" type="submit" value="Rechercher" />
        </form>
    </div>
    <div class="conteneur1">
            <div class="d1"></div>
          </div>
          <div class="conteneur2">
            <div class="d2"></div>
    </div>

    <div id="menu">
    <ul>
      <li><a href="store.php">Boutique</a></li>


    </ul>
  </div>

  <div  >

    <br/>
		<a href="/store.php"><h3>Cliquez ici pour visiter notre Boutique</h3></a>

    <p>
    <h4> Élevez des poules pondeuses ! </h4>
De l’oeuf à la poule
Vous souhaitez vous lancer dans un petit élevage de poussin ou de poules pondeuses ? 
Vous n’y connaissez pas grand chose, mais pourtant vous sentez que cela vous attire ? Vous avez entièrement raison ! 
Faire naître des poussins soi même, ou élever des poules pondeuses chez soi est aussi agréable que d’avoir un bébé chat, 
que ce soit pour un adulte et/ou surtout pour des enfants. Mais attention : après quelques semaines, votre poussin va grandir,
et après quelques mois, devenir une poule (ou un poulet puis un coq), aussi il vaut mieux prévoir tous les aléas (espace, alimentation, 
lois à respecter) 
connaitre le fonctionnement, la vie, les besoins de votre animal, bref, penser à tout.</p>

		<a href="store.php"><img src="https://zupimages.net/up/20/04/60nd.png" title="Achetez-moi"/></a>

      <p>piopiou.com est un site de conseils pour élever vos poussins, vos poules, vos canards dans les meilleures conditions. 
      Nous vous proposons également des formations et services de conseils ou coaching personnalisé pour vous permettre de vous lancer dans votre passion 
      : élevage, soins mais aussi chaponnage, affinage, conservation, naissance, recettes… 
      Surtout, nous vous proposons des volailles (élevage amateur) de qualité élevées sur le toit de l'école 42 : poussins, poules, poulets, mais aussi, canards de Barbarie, cailles, 
      œufs fécondés… Nos services sont uniquement proposés de particulier à particulier.</p>
		<a href="/store.php"><img src="https://zupimages.net/up/20/04/infu.png" title="Achetez-moi"/></a>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
        </div>
<hr width="100%" color="blue" size="4">
<p id="p1"> <i> © mvo-van- & smoreno- 2019 </i></p>
</body>
</html>