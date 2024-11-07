<?php
class clsConnection{
	function DBInit()
	{
		ini_set('session.gc_maxlifetime', 3000);
		$host= "localhost";
		$user = "cmogroup";
		$passwd= "hC04ha_1";
		$db=  "cmogroup";
		$connection = mysql_connect($host, $user, $passwd);
		mysql_query("SET Character_set_results=UTF8");
		mysql_query("SET Character_set_client=UTF8");
		mysql_query("SET Character_set_cennection=UTF8");
		mysql_query("SET Collation_connection=UTF8");
		mysql_query("SET Character_database=UTF8");
		mysql_query("SET Character_server=UTF8");
		mysql_query("SET NAMES UTF8");

		return mysql_select_db($db, $connection) or die("Please try again");
	}
	function DBquery($strSQL)
	{	
		return mysql_query($strSQL);
	}
	function DBfetch($result)
	{
		return mysql_fetch_array($result);
	}
	function DBnum_rows($result)
	{
		return mysql_num_rows($result);
	}
	function DBfree_result($result)
	{
		return mysql_free_result($result);
	}
	function DBclose()
	{
		if (is_resource($connection)) {
			mysql_close($connection);
		}
	}
}
?>