<?php session_start();
    include('auth.php');
    $log = array("login" => $_POST['login'], "passwd" => $_POST['passwd']);
    $file = "private/passwd";
    if(file_exists('private/passwd'))
    {
        $f = auth($_POST['login'],$_POST['passwd']);
        if ($f == TRUE)
        {
            $get=file_get_contents('private/passwd');
            $get=unserialize($get);

            foreach ($get as $key=>$user)
            {
                if ($user['login'] === $_POST['login']) {
                    unset($get[$key]);
                    header("Location:page_utilisateur.php?conexion=valide_sup");
                }
            }
            $get=serialize($get);
            if (!$get)
                 unlink( "private/passwd" ) ;
            file_put_contents("private/passwd",$get);
            $_SESSION['loggued_on_user'] = "";
        }
        else
        {
            $_SESSION['loggued_on_user'] = "";
            header('Location: page_utilisateur.php?conexion=error_sup');
		}
	}
	else
		header('Location: page_utilisateur.php?conexion=error_sup');
?>