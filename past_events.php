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
		
	$results=$db->query("SELECT * from events where EXTRACT(SECOND FROM age(StartTime,now())) < 0;");
	var_dump($results);
/*
	while ($row = pg_fetch_row($rs)){
		echo $row[0],$row[1] . "\n";
	}
	pg_close($db);
	echo 'Closed database successfully';
*/
?>

