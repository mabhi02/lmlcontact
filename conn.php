<?php
//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("mysql://b779551da75fbb:e21ad95b@us-cdbr-east-05.cleardb.net/heroku_bf57ae6961c936f?reconnect=true"));
$cleardb_server = $cleardb_url["us-cdbr-east-05.cleardb.net"];
$cleardb_username = $cleardb_url["b779551da75fbb"];
$cleardb_password = $cleardb_url["e21ad95b"];
$cleardb_db = substr($cleardb_url["connectDB.php"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
?>
