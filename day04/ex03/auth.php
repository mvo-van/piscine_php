<?php
function auth($login, $passwd)
{
    if($login && $passwd)
    {   
        $passwd = hash('whirlpool', $passwd);
        $file = "../private/passwd";

            $get = file_get_contents($file);
            $content = unserialize($get);
            if($content){
            foreach($content as $elem)
            { 
                if($elem['login'] == $login)
                {
                    if($passwd == $elem['passwd'])
                        return TRUE;
                }
            }}
        
        return FALSE;
    }
    else
        return FALSE;
}
?>