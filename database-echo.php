<?php

include_once($cr_root . "includes/dbmgr.php");
include_once($cr_root . "includes/dbquerymgr.php");

$db = new DB("thezdin_cashreg", "d@db1sh", "thezdin_crusers", "localhost");
$qm = new DBQueryMGR();
$dbmgr = new DBMGR();

if( isset( $_REQUEST['firstname'] ) && isset( $_REQUEST['cofirstname'] ) && isset( $_REQUEST['lastname'] ) && isset( $_REQUEST['colastname'] ) && isset( $_REQUEST['address'] ) && isset( $_REQUEST['coaddress'] ) && isset( $_REQUEST['password2'] ) && isset( $_REQUEST['password1'] ) && isset( $_REQUEST['city'] ) && isset( $_REQUEST['cocity'] ) && isset( $_REQUEST['state'] ) && isset( $_REQUEST['costate'] ) && isset( $_REQUEST['zip'] ) && isset( $_REQUEST['cozip'] ) && isset( $_REQUEST['phone1'] ) && isset( $_REQUEST['cophone1'] ) && isset( $_REQUEST['phone2'] ) && isset( $_REQUEST['cophone2'] ) && isset( $_REQUEST['email'] ) && isset( $_REQUEST['email2'] ) )
{
	$cofirstname = $_REQUEST['cofirstname'];
	$lastname = $_REQUEST['lastname'];
	$colastname = $_REQUEST['colastname'];
	$firstname = $_REQUEST['firstname'];
	$coaddress = $_REQUEST['coaddress'];
	$address = $_REQUEST['address'];
	$coaddress2 = $_REQUEST['coaddress2'];
	$address2 = $_REQUEST['address2'];
	$cocity = $_REQUEST['cocity'];
	$city = $_REQUEST['city'];
	$costate = $_REQUEST['costate'];
	$state = $_REQUEST['state'];
	$cozip = $_REQUEST['cozip'];
	$zip = $_REQUEST['zip'];
	$cophone1 = $_REQUEST['cophone1'];
	$phone1 = $_REQUEST['phone1'];
	$cophone2 = $_REQUEST['cophone2'];
	$phone2 = $_REQUEST['phone2'];
	$email = $_REQUEST['email'];
	$email2 = $_REQUEST['email2'];
	$password1 = $_REQUEST['password1'];
	$password2 = $_REQUEST['password2'];

	$password1 = md5( $password1 );
	$password2 = md5( $password2 );

	if( strcmp( $password1, "" ) == 0 )
	{
		echo "Error, password field left blank";
		exit;	
	}
	
	if( strcmp( $email, "" ) == 0 )
	{
		echo "Error, email field left blank";
		exit;	
	}

	if( strcmp( $password1, $password2 ) || strcmp( $password2, $password1 ) )
	{
		echo "Passwords not the same, business logic will be inserted here to handle";
		exit;
	}

	if( strcmp( $email, $email2 ) || strcmp( $email2, $email ) )
	{
		echo "Email addresses are not the same, business logic to be inserted here to handle";
		exit;
	}	
	
	$dbmgr->Query( $qm->Select( "*", "users", "email", $email ), $db );
	if( $dbmgr->affected_rows > 0 )
	{
		echo "A user with this email address is already registered!";
		exit;
	}

	$querystring = $qm->Insert( "users", "uid, firstname, cofirstname, lastname, colastname, address, coaddress, address2, coaddress2, city, cocity, state, costate, zip, cozip, phone1, cophone1, phone2, cophone2, email, password, active", "NULL, '$firstname', '$cofirstname', '$lastname', '$colastname', '$address', '$coaddress', '$address2', '$coaddress2', '$city', '$cocity', '$state', '$costate', '$zip', '$cozip', '$phone1', '$cophone1', '$phone2', '$cophone2', '$email', '$password1', 0" );

	$dbmgr->Query($querystring, $db);
	echo "<br><br>If you are seeing this with no error messages, there is a good chance it worked correctly.";
				
	
} else if( isset( $_REQUEST['firstname'] ) && isset( $_REQUEST['lastname'] ) && isset( $_REQUEST['address'] ) && isset( $_REQUEST['city'] ) && isset( $_REQUEST['state'] ) && isset( $_REQUEST['zip'] ) && isset( $_REQUEST['phone1'] ) && isset( $_REQUEST['phone2'] ) && isset( $_REQUEST['email'] ) )
	{
		echo "Account info modification request recieved, insert hack attempt check and sql update lines here.";		
		
	}
?>
