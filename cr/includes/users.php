<?PHP

include_once($cr_root . 'includes/session.php');
include_once($cr_root . 'includes/dbmgr.php');
include_once($cr_root . 'includes/dbquerymgr.php');

class User
{
	function User()
	{
		$this->ID = $userdata['user_id'];
		$this->User = $userdata['username'];
		$this->DB = new DB( 'sacrifi_sepulchr', '12qwaszx', 'sacrifi_sacrificephpBBsql', 'localhost');
		$this->DBMgr = new DBMGR();
		$this->DBQueryMgr = new DBQueryMGR();
		$this->setPGroups();
	}
	
	function getPID()
	{
		return $this->ID;
	}
	
	function getPUser()
	{
		return $this->User;
	}
	
	function getSecGroups()
	{
		return $this->secGroups;
	}
	
	function getPGroups()
	{
		return $this->Groups;
	}
	
	function setPGroups()
	{
		$i=0;
		$result = $this->DBMgr->Query( $this->DBQueryMgr->Select("*", "phpbb_user_group", "user_id", $this->ID), $this->DB );
		while( $row = mysql_fetch_array( $result ) )
		{
			$this->Groups[$i] = $row['group_id'];
			$i++;
		}
	}
	
	var $DB;
	var $DBMgr;
	var $DBQueryMgr;
	
	var $secGroups;
	var $Groups;
	var $ID;
	var $User;	

}


?>