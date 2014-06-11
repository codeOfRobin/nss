<?php
	$host        = "host=127.0.0.1";
	$port        = "port=5432";
	$dbname      = "dbname=nssdb";
	$credentials = "user=postgres password=WXYYQsTa";
	$my_id	     = "'2012cs50284'"; # user's entry number.
	$db = pg_connect( "$host $port $dbname $credentials"  );
	if(!$db){
		echo 'Error : Unable to open database';
	}
	else {
		echo 'Opened database successfully';
	}

	echo "\n";
	$query = "select * from specialevent_attend, genre_fans,specialevents where genre_fans.fan=$my_id and specialevents.genre_id=genre_fans.genre_id and (EXTRACT(SECOND FROM age(StartTime,now())) > 0);";
	$rs = pg_query($db, $query) or die("Cannot execute query: $query\n");
	while ($row = pg_fetch_row($rs)){
		echo $row[5],$row[7],$row[8] "\n";  #name,start_time,end_time
	}
	pg_close($db);
	echo 'Closed database successfully';
?>
