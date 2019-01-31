<?PHP

include_once($cr_root . 'includes/users.php');

class Security
{
	function Security( )	
	{
		$this->user = new User();
		$this->groups = $this->user->getPGroups();
	}
	
	function isAnon()
	{
		if( $this->user->getPID() == -1 )
			return 1;
		return 0;
	}
	
	function isPGroup( $gid )
	{
		foreach( $this->groups as $key => $value )
		{
			if( $value == $gid )
				return 1;
		}
		return 0;
	}	
	
	var $user;
	var $groups;
}

?>