<?php
	$host        = "host=127.0.0.1";
	$port        = "port=5432";
	$dbname      = "dbname=nssdb";
	$credentials = "user=postgres password=WXYYQsTa";
	$my_id       = "'2012cs50284'"; # user's entry number.
	$db = pg_connect( "$host $port $dbname $credentials"  );
	if(!$db){
		echo 'Error : Unable to open database';
	}
	else {
		echo 'Opened database successfully';
	}

	echo "\n";
	$query = "select * from specialevent_attend, follow,specialevents where follow.other=specialevent_attend.entry_no and specialevents.splevnt_id=specialevent_attend.splevnt_id and (EXTRACT(SECOND FROM age(StartTime,now())) > 0) and follow.fan = $my_id;";
	$rs = pg_query($db, $query) or die("Cannot execute query: $query\n");
	while ($row = pg_fetch_row($rs)){
		echo $row[3],$row[5],$row[7],$row[8] "\n"; # notified because 3, eventname 5, start time 7, end time 8
	}
	pg_close($db);
	echo 'Closed database successfully';
?>
