<?php

include_once($cr_root . "includes/dbmgr.php");
include_once($cr_root . "includes/dbquerymgr.php");
include_once($cr_root . "includes/session.php");

class SessionMGR
{
	function SessionMGR()
	{
		$this->session = new Session();
		$this->initDB();
		$this->setUserID();
		$this->setAccountInfo();
	}
	
	function setAccountInfo()
	{
		if( $this->session->userid > 0 )
		{
			$result = $this->dbmgr->Query(  $this->qm->Select( "*", "users", "uid", $this->session->userid ), $this->db );
			if( $this->checkTimeout() )
				$this->accountinfo = mysql_fetch_array( $result );
			else
				echo "Your session has timed out!";
		}		
	}
	
	function setUserID()
	{
		//init the DB and run a quick query to pull the userID from
		//the session Db table
		$result = $this->dbmgr->Query( $this->qm->Select( "*", "session", "id", $this->session->getSession_ID() ), $this->db );
		while( $row = mysql_fetch_array( $result ) )
		{
			$this->session->setUserID( $row['userid'] );
		}
	}
	
	function checkTimeout()
	{
		//init the DB and run a quick query to check if the
		//timestamp stored for the database has not timed out 
		$result = $this->dbmgr->Query( $this->qm->Select( "*", "session", "id", $this->session->getSession_ID() ), $this->db );
		while( $row = mysql_fetch_array( $result ) )
		{
			if( time() > $row['time'] )
			{
				//http_redirect returns false on fail, so if client browser
				//does not support redirects, an error can be generated where
				//this function was called to handle.
				return 0;
			} else {
				echo "<br>You are logged in and your session has not timed out";
				$this->updateSession();
				return 1;
			}
		}
		return 0;
	}
	
	function validatelogin( $email, $pass )
	{
		$result = $this->dbmgr->Query(  $this->qm->Select( "*", "users", "email", $email ), $this->db );
		while ( $row = mysql_fetch_array( $result ) )
		{	
			if( $row['password'] != md5( $pass ) )
			{
				echo "Password Incorrect";
				return 0;
			}
			$this->session->setUserID( $row['uid'] );
			$this->logout();
			$this->setSession();
			return 1;
		}
		echo "<br>Username does not exist";
		return 0;	
	}
	
	function updateSession()
	{
		if( $this->sessionExists() )
		{
			$query = "UPDATE session SET time = '" . $this->session->time . "' WHERE id = '" . $this->session->getSession_ID() . "' LIMIT 1";
			$this->dbmgr->Query( $query, $this->db );
			if( $this->dbmgr->affected_rows )
				return 1;
			else
				return 0;			
		}
	}
	
	function sessionExists()
	{
		return ( $this->session->userid > 0 );	
	}
	
	function logout()
	{
		if( $this->sessionExists() )
		{
			$this->dbmgr->Query( $this->qm->Delete( "session", "id", $this->session->getSession_ID() ), $this->db );
			if( $this->dbmgr->affected_rows > 0 )
				return 1;
			else
				return 0;
		}
		return 0;
	}
	
	function setSession()
	{
		if( !$this->updateSession() )
		{
			$this->session->setTimeout();
			$this->setAccountInfo();
			$columns = "id, userid, time, ip";
			$values = $this->session->getQuerystyle();
			$result = $this->dbmgr->Query(  $this->qm->Insert( "session", $columns, $values), $this->db );
			if( $this->dbmgr->affected_rows )
				return 1;
			else
				return 0;
		} else
			return 1;
	}
	
	function initDB()
	{
		//Simply initialize our DB components for easy querying
		$this->db = new DB("thezdin_cashreg", "d@db1sh", "thezdin_crusers", "localhost");
		$this->qm = new DBQueryMGR();
		$this->dbmgr = new DBMGR();	
	}

	var $accountinfo;
	var $session;
	var $db;
	var $qm;
	var $dbmgr;
}
?>