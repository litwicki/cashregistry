<?php

class Session
{
	function Session()
	{
		$this->setSession();
		$this->setTimeout();
		$this->setIP();
		$this->userid = 0;
	}
	
	function setSession()
	{
		session_start();
		$this->session_id = session_id();
	}
	
	function getSession_ID()
	{
		return md5( $this->session_id );
	}

	function setTimeout()
	{
		$this->time = time() + (10*60);
	}
	
	function getQuerystyle()
	{
		return "'" . $this->getSession_ID() . "', '" . $this->userid . "', '" . $this->time . "', '" . $this->ip . "' ";	
	}
	
	function setIP()
	{
		$this->ip = ip2long( getenv("REMOTE_ADDR") );	
	}
	
	function setUserID( $userid )
	{
		$this->userid = $userid;	
	}
	
	
	var $session_id;
	var $time;
	var $ip;
	var $userid;
}
?>
