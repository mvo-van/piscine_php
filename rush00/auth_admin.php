<?php function auth_admin($login)
{
    if($login)
    {
		$file = "private/passwd";
		if(file_exists($file))
		{
            $get = file_get_contents($file);
            $content = unserialize($get);
            if($content){
            foreach($content as $elem)
            { 
                if($elem['login'] == $login)
                        return TRUE;
			}}
		}
        return FALSE;
    }
    else
        return FALSE;
}
?>