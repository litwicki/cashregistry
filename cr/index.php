<?php

$cr_root = "./";

include_once($cr_root . "includes/dbmgr.php");
include_once($cr_root . "includes/dbquerymgr.php");

$db = new DB("sacrifi_cashreg", "d@db1sh", "sacrifi_crusers", "localhost");
$qm = new DBQueryMGR();
$dbmgr = new DBMGR();

if( isset( $_REQUEST['T1']) && isset( $_REQUEST['T2']) && isset( $_REQUEST['T3']) && isset( $_REQUEST['T4']) && isset( $_REQUEST['T5']) && isset( $_REQUEST['T6']) && isset( $_REQUEST['T7']) && isset( $_REQUEST['D1']) )
{
	$name = $_REQUEST['T1'];
	$email = $_REQUEST['T2'];
	$username = $_REQUEST['T3'];
	$address = $_REQUEST['T4'];
	$city = $_REQUEST['T5'];
	$state = $_REQUEST['T6'];
	$zip = $_REQUEST['T7'];
	$type = $_REQUEST['D1'];

	$querystring = "INSERT INTO `users` ( uid, name, email, username, address, city, state, zip, type, active ) " . 
				"VALUES ( NULL, '$name', '$email', '$username', '$address', '$city', '$state', '$zip', '$type', 0 );";
	echo $querystring;				
	$dbmgr->Query($querystring, $db);
	$dbmgr->Disconnect();
	echo "<br><br>If you are seeing this with no error messages, there is a good chance it worked correctly.";
				
	
} else {
	echo "This website is the development test of The Cash Gift Registry. You have reached this in error. Please speak with the Jake Litwicki or Aaron Bullock if you have any questions.";
}





?>