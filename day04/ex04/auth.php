<?php
echo oui;

function auth($login, $passwd)
{
	echo oui;
   $mdp = hash(sha512, $passwd);
   $content = unserialize(file_get_contents("../private/passwd"));
   foreach($content as $elem)
   {
	   if ($elem["login"] == $login && $elem["passwd"] == $mdp)
	   {
		   return (TRUE);
	   }
	   else
	   {
		   return (FALSE);
	   }
   }
}
?>
