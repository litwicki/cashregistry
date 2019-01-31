<?php

include_once($cr_root . "includes/db.php");

class DBMGR
{
	function DBMGR()
	{
		$this->dbh = null;
		$this->result = null;	
	}

	function Connect( $db )
	{
		$this->dbh = mysql_connect($db->server, $db->user, $db->pass ) or die ("Error 0002: I cannot connect to the database because: " . mysql_error());
		mysql_select_db($db->dbname, $this->dbh );
	}
	function Disconnect( )
	{
		mysql_close($this->dbh);
	}
	function Query( $query, $db )
	{
		$this->Connect( $db );
		$this->result = mysql_query( $query, $this->dbh ) or die ("Error 0001: I cannot query the database because: " . mysql_error() );	
		$this->affected_rows = mysql_affected_rows();
		$this->Disconnect();
		return $this->result;
	}

	var $affected_rows;
	var $dbh;
	var $result;
}





?>