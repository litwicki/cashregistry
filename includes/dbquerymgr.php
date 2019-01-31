<?PHP

class DBQueryMGR
{
	function DBQueryMGR()
	{
		$this->querystring="";
	}
	
	function Select($what, $from, $where, $equals)
	{
		$this->querystring = "SELECT " . $what . " FROM " . $from . " WHERE " . $where . " = '" . $equals . "'";
		return $this->querystring;
	}
	
	function Delete($from, $where, $equals)
	{
		$this->querystring = "DELETE FROM " . $from . " WHERE " . $where . " = '" . $equals . "'";
		return $this->querystring;
	}
	
	function Insert( $into, $columns, $values )
	{
		$this->querystring = "INSERT INTO " . $into . " ( " . $columns . " ) VALUES ( " . $values . " )";
		return $this->querystring;
	}

	var $querystring;
	
}
	
?>