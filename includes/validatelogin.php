<?php 

if( isset( $_REQUEST['email'] ) && isset( $_REQUEST['password'] ) )
{
	if( $smgr->validatelogin( $_REQUEST['email'], $_REQUEST['password'] ) )
	{
		echo "login successful!";
	}
}



?>