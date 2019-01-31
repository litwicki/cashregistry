<?php

class DB
{
	function DB($user,$pass,$db,$server)
	{
			$this->setUser($user);
			$this->setPass($pass);
			$this->setDb($db);
			$this->setServer($server);
	}
	function getUser()
	{
		return $this->user;
	}
	function getPass()
	{
		return $this->pass;
	}
	function getDb()
	{
		return $this->dbname;
	}
	function getServer()
	{
		return $this->server;
	}
	function setUser($user)
	{
		$this->user=$user;
	}
	function setPass($pass)
	{
		$this->pass=$pass;
	}
	function setDb($db)
	{
		$this->dbname=$db;
	}
	function setServer($server)
	{
		$this->server=$server;
	}

	var $user;
	var $pass;
	var $dbname;
	var $server;
}


?>