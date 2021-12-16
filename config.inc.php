<?php
$url = parse_url(getenv("mysql://b779551da75fbb:e21ad95b@us-cdbr-east-05.cleardb.net/heroku_bf57ae6961c936f?reconnect=true"));

$server = $url["us-cdbr-east-05.cleardb.net"];
$username = $url["b779551da75fbb"];
$password = $url["e21ad95b"];
$db = substr($url["connectDB.php"], 1);
$conn = new mysqli($server, $username, $password, $db);
?>