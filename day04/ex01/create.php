<?php 
    if($_POST['login'] && $_POST['passwd'] && ($_POST['submit'] == "OK") )
    {   
        $_POST['passwd'] =hash('whirlpool', $_POST['passwd']);
        $log = array("login" => $_POST['login'], "passwd" => $_POST['passwd']);
        $file = "../private/passwd";
        if(!(file_exists('../private/')))
			mkdir('../private');
		else if(!(file_exists($file))){}
        else
        {
            $get = file_get_contents($file);
            $content = unserialize($get);
            foreach($content as $elem)
            { 
                if($elem['login'] == $log['login'])
                {          
                    echo "ERROR\n";
                    exit;
                }
            }
        }
        $content []= $log;
        $put = serialize($content);
        file_put_contents($file, $put);
        echo "OK\n";
    }
    else
        echo "ERROR\n";
?>
