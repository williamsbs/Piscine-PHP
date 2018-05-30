<?php
function auth($login, $passwd)
{
   $mdp = hash(sha512, $passwd);
   $content = unserialize(file_get_contents("../../private/passwd"));
   $is_logged = FALSE;
   foreach($content as $elem)
   {
	   if ($elem["login"] == $login && $elem["passwd"] == $mdp)
	   {
		   $is_logged = TRUE;
	   }
   }
   if ($is_logged == TRUE)
   {
	   return (TRUE);
   }
   else
   {
	   return (FALSE);
   }
}
?>
