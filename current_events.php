<?php
	
	error_reporting(E_ALL|E_STRICT); 
	ini_set('display_errors', true);
	


		$host        = "mysql:host=127.0.0.1;";
		$port        = "port=8889";
		$dbname      = "dbname=nssdb;";
		$user="root";
		$pass="root";
		$db = new PDO($host.$dbname.$port,$user,$pass);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$db->exec("SET NAMES 'utf8'");
		
		
		try
		{

			$results=$db->query("SELECT * FROM iOS_events Order by StartTime Desc");
			$display=$results->fetchAll(PDO::FETCH_ASSOC);
			
			foreach ($display as $row)
			{
				echo($row["name"].";".$row["Description"].";".$row["StartTime"].";".$row["EndTime"].";".$row["formLink"].";".$row["nameField"].";".$row["EntryNoField"].";".$row["EmailIDField"].";".$row["phoneNoField"].";".$row["ExtraNotesField"]."break");
			}
		}
		
		catch(Exception $e)
		{
			echo("Cannot connect to database");
		}
		
	
	
?>

