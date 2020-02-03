<?php session_start();
		$_SESSION['loggued_on_user'] = "";
		$_SESSION['caddy'] = "";
        header("Location: index.php?");
?>