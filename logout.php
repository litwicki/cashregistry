<?php 

$cr_root = "./";
include_once( $cr_root . "header.php" );
include_once( $cr_root . "linkbar.php" );

if( $smgr->logout() )
	echo "logout successful";
else
	echo "Logout unsuccessful, or you were not logged in to begin with";

include_once( $cr_root . "footer.php" );

?>