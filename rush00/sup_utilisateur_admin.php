<?php session_start();
    include('auth_admin.php');
    $file = "private/passwd";
    if(file_exists('private/passwd'))
    {
        $f = auth_admin($_POST['login']);
        if ($f == TRUE && $_POST['login'])
        {
            $get=file_get_contents('private/passwd');
            $get=unserialize($get);
            foreach ($get as $key=>$user)
            {
                if ($user['login'] === $_POST['login']) {
                    unset($get[$key]);
                    header("Location:admin.php?admin=valide_sup");
                }
            }
            $get = serialize($get);
            if (!$get)
                unlink( "private/passwd" ) ;
            file_put_contents("private/passwd",$get);
        }
        else
        {
            header('Location: admin.php?admin=error_sup');
		}
	}
	else
		header('Location: admin.php?admin=error_sup');
?>