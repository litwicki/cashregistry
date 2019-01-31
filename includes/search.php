<?php

include_once($cr_root . "includes/dbmgr.php");
include_once($cr_root . "includes/dbquerymgr.php");

class SearchCR
{
	function SearchCR()
	{
		$this->dbh = new DB( "thezdin_cashreg", "d@db1sh", "thezdin_crusers", "localhost");
		$this->result = "";
		$this->dbmgr = new DBMGR();
		$this->qm = new DBQueryMGR();	
	}
	
	function QueryFirstandLast( $firstname, $lastname )
	{
		$this->querystring = "SELECT * FROM `users` WHERE `firstname` LIKE CONVERT( _utf8 '$firstname' USING latin1 ) AND `lastname` LIKE CONVERT( _utf8 '$lastname' USING latin1 )";
		$this->result = $this->dbmgr->Query( $this->querystring, $this->dbh );
		return 1;
	}

	function EchoResults()
	{
		while( $row = mysql_fetch_array( $this->result ) )
		{
			return $row;

		}
		return (-1);
	
	}


	var $querystring;
	var $qm;
	var $dbmgr;
	var $dbh;
	var $result;
}





?>
