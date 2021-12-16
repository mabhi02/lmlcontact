
<?php
$url = parse_url(getenv("mysql://b779551da75fbb:e21ad95b@us-cdbr-east-05.cleardb.net/heroku_bf57ae6961c936f?reconnect=true"));

$server = $url["us-cdbr-east-05.cleardb.net"];
$username = $url["b779551da75fbb"];
$password = $url["e21ad95b"];
$db = substr($url["heroku_bf57ae6961c936f"], 1);
$connect=mysqli_connect($server,$username,$password,$db);
if(!$connect)
{
  die("Could not connect" . mysqli_connect_error());
}
if(isset($_POST['sub']))
{
  $username1 = $_POST['username'];
  $message 
}
?>