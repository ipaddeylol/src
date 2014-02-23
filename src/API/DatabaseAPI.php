<?php
/*
  _ _____          _     _            
 (_)  __ \        | |   | |           
  _| |__) |_ _  __| | __| | ___ _   _ 
 | |  ___/ _` |/ _` |/ _` |/ _ \ | | |
 | | |  | (_| | (_| | (_| |  __/ |_| |
 |_|_|   \__,_|\__,_|\__,_|\___|\__, |
                                 __/ |
                                |___/ 
 */
//error reporting set to 0, dont want to interupt server loading...  SQL isn't essential.




class DatabaseAPI
{

	public function init()
	{
		Console(FORMAT_AQUA."[SQL]: SQL API Initalized.");
		self::connect("MCPE"); //think self:: is correct... not familiar with OOP
	}
	
	public function connect($db)
	{
		if(!mysqli_connect("localhost", "root", "parker"))
		{
			Console(FORMAT_RED."[SQL]: Failed to connect on: $mysql_user");
		}
		else
		{
			mysqli_select_db($db);
			Console(FORMAT_GREEN."[SQL]: Succesfully created SQL instance.");
		}
	}
	
	public function closeConnection()
	{
		Console(FORMAT_RED."[SQL]: Server connection closed.");
		mysqli_close(self::connect());
	}
	
	function __construct()
	{
		
	}
}


?>