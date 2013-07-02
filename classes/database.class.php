<?php
class database
{
	private $config;
	private $connection;
	function __construct()
	{
		$this->config = new config;
<<<<<<< HEAD
		$this->connection = new mysqli($this->config->values->DB_HOST, $this->config->values->DB_USERNAME, $this->config->values->DB_PASSWORD, $this->config->values->DB_NAME);
=======
		$link = mysql_connect($this->config->values->DB_HOST, $this->config->values->DB_USERNAME, $this->config->values->DB_PASSWORD);
		$this->connection = mysql_select_db($this->config->values->DB_NAME);
>>>>>>> dc476d8ce54ecbb383854c30bf4fe8f8a3e8d108
	}

	function query($q)
	{
		$objArray = array();
<<<<<<< HEAD
		if($result = $this->connection->query($q))
		{
			while($obj = $result->fetch_object())
		    {
				array_push($objArray,$obj);
		    }
			$result->close();
		}
		return (object) $objArray;
	}

	function singleRow($q)
	{
		$result = $this->connection->query($q);
		return $result->fetch_object();
	}

	function escape($s)
	{
		return $this->connection->real_escape_string($s);
	}

	function lastAdded()
	{
		return $this->connection->insert_id;
=======
		$result = mysql_query($q);
		while($row = mysql_fetch_object($result))
		{
			array_push($objArray, $row);
		}
		return (object) $objArray;
	}

	function singleRow($q)
	{
		$result = mysql_query($q);
		return mysql_fetch_object($result);
	}
	
	function lastAdded()
	{
		return mysql_insert_id();
>>>>>>> dc476d8ce54ecbb383854c30bf4fe8f8a3e8d108
	}

	function __destruct()
	{
<<<<<<< HEAD
		$this->connection->close();
=======
		mysql_close();
>>>>>>> dc476d8ce54ecbb383854c30bf4fe8f8a3e8d108
	}
}
?>
