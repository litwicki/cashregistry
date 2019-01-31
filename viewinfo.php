<?php 
$cr_root = "./";
include_once( $cr_root . "header.php" );
include_once( $cr_root . "linkbar.php" );
include_once( $cr_root . "database-echo.php" );

if( !$smgr->checkTimeout() )
{
	echo "<center>You must login to use this feature<br>
			<a href=http://www.thezdin.com/clients/cashregistry/login.php>			
			Login</a>";
	exit;
}
echo "<table>";
foreach( $smgr->accountinfo as $k => $j )
{
	echo "<tr><td>" . $k . "</td><td>" . $j . "</td></tr>";
}
echo "</table>";

include_once( $cr_root . "footer.php" );
?>