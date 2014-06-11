<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p>Hello World</p>'; ?> 
 <?php
   $host        = "host=127.0.0.1";
   $port        = "port=5432";
   $dbname      = "dbname=testdb";
   $credentials = "user=postgres password=WXYYQsTa";
   echo '<p>works</p>';
   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo '<p>Error : Unable to open database</p>';
   } else {
      echo '<p>Opened database successfully</p>';
   }
 ?>
<?php

$host = "localhost";
$user = "postgres";
$pass = "WXYYQsTa";
$db = "testdb";


$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n");

$query = "SELECT VERSION()";
$rs = pg_query($con, $query) or die("Cannot execute query: $query\n");
$row = pg_fetch_row($rs);
echo $row[0] . "\n";

pg_close($con);

?>


 </body>
</html>
