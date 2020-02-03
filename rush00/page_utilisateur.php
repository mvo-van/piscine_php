<html>
        <header>
                <link rel="stylesheet" href="utilisateur.css"> 
        <header>
<body>
        <a href='store.php'> &larr; Retour Aux Achats</a><br/><br/>
    <div class="trois_bloc">
	<div class="bloc"><h3>CONNEXION</h3><br/>
    <form method="POST" action="conexion.php">
            Identifiant: <input type="text" name="login" value=""/><br/><br/>
            Mot de passe: <input type="password" name="passwd" value="" /><br/><br/>
            <input type="submit" name="submit" value="VALIDER"/>
    </form>
    <?php       
        if(isset($_GET['conexion']) && ($_GET['conexion']=="error_co"))
                echo "<span class=\"erreur\">Erreur de donnee login/mot de passe non valide</span>";
        ?></div>
    <div class="bloc">
    <h3>NOUVEL UTILISATEUR</h3><br/>
    <form method="POST" action="new_utilisateur.php">
            Identifiant: <input type="text" name="login" value=""/><br/><br/>
            Mot de passe: <input type="password" name="passwd" value="" /><br/><br/>
            <input type="submit" name="submit" value="VALIDER"/>
    </form>
    <?php       
        if(isset($_GET['conexion']) && ($_GET['conexion']=="error_new"))
				echo "<span class=\"erreur\">Erreur de donnee login/mot de passe non valide</span>";
		else if(isset($_GET['conexion']) && ($_GET['conexion']=="valide_new"))
				echo "<span class=\"valide\">L'utilisateur a &eacute;t&eacute; cr&eacute&eacute;</span>";
        ?></div>
    <div class="bloc bloc_3">
    <h3>SUPPRESSION UTILISATEUR</h3><br/>
    <form method="POST" action="sup_utilisateur.php" >
            Identifiant: <input type="text" name="login" value=""/><br/><br/>
            Mot de passe: <input type="password" name="passwd" value="" /><br/><br/>
            <input type="submit" name="submit" value="VALIDER"/>
    </form>
    <?php
        if(isset($_GET['conexion']) && ($_GET['conexion']=="error_sup"))
				echo "<span class=\"erreur\">Erreur de donnee login/mot de passe non valide</span>";
		else if(isset($_GET['conexion']) && ($_GET['conexion']=="valide_sup"))
                echo "<span class=\"valide\">L'utilisateur a &eacute;t&eacute; supprim&eacute;</span>";
        ?></div>
	<div class="bloc bloc_3">
    <h3>MODIFIER MOT DE PASSE</h3><br/>
    <form method="POST" action="change_utilisateur.php" >
            Identifiant: <input type="text" name="login" value=""/><br/><br/>
            Ancien mot de passe: <input type="password" name="passwd" value="" /><br/><br/>
			Nouveau mot de passe: <input type="password" name="new_passwd" value="" /><br/><br/>
            <input type="submit" name="submit" value="VALIDER"/>
    </form>
    <?php
        if(isset($_GET['conexion']) && ($_GET['conexion']=="error_change"))
				echo "<span class=\"erreur\">Erreur de donnee login/mot de passe non valide</span>";
		else if(isset($_GET['conexion']) && ($_GET['conexion']=="valide_change"))
                echo "<span class=\"valide\">Mot de passe modifi&eacute;</span>";
        ?></div>
	</div>
</body></html>