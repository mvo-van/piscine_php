<?php
    if($_POST['login'] && $_POST['oldpw'] && $_POST['newpw'] && ($_POST['submit'] == "OK") )
    {   
        $_POST['oldpw'] =hash('whirlpool', $_POST['oldpw']);
        $file = "../private/passwd";
            $get = file_get_contents($file);
            $content = unserialize($get);
            $i=0;
            foreach($content as $elem)
            { 
                if($elem['login'] == $_POST['login'])
                {
                    if($_POST['oldpw'] == $elem['passwd'])
                    {
                        $elem['passwd']=hash('whirlpool', $_POST['newpw']);
                        $content[$i]= $elem;
                        $put = serialize($content);
                        file_put_contents($file, $put);
                        echo "OK\n";
                        exit;
                    }
                    
                }
                $i++;
            }
            echo "ERROR\n";
            exit;
    }
    else
        echo "ERROR\n";
?>