<?php 

echo "Anyone seeing this page was trying to directory browse the system."
		. "<br>This is a bad thing.  Insert functionality to log IP here.";

$ip = getenv ("REMOTE_ADDR"); 

echo " <br>" . $ip;

?>