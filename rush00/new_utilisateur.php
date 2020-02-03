<?php 
    if($_POST['login'] && $_POST['passwd'] && ($_POST['submit'] == "VALIDER") )
    {   
        $_POST['passwd'] =hash('whirlpool', $_POST['passwd']);
        $log = array("login" => $_POST['login'], "passwd" => $_POST['passwd']);
        $file = "private/passwd";
        if(!(file_exists('private/passwd')))
            mkdir('private');
        else
        {
            $get = file_get_contents($file);
            $content = unserialize($get);
            foreach($content as $elem)
            { 
                if($elem['login'] == $log['login'])
                {          
                    header('Location:page_utilisateur.php?conexion=error_new');
                    exit;
                }
            }
        }
        $content []= $log;
        $put = serialize($content);
        file_put_contents($file, $put);
        $_SESSION['loggued_on_user'] = array($_POST['login'],$_POST['passwd']);
        header('Location:page_utilisateur.php?conexion=valide_new');
    }
    else
        header('Location:page_utilisateur.php?conexion=error_new');
?>
