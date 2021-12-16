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

$name="heroku_bf57ae6961c936f";
$username = "b779551da75fbb";
$password = "e21ad95b";
$database = "lmldata";
$connect=mysqli_connect($name,$username,$password,$database);
if(!$connect)
{
  die("Could not connect" . mysqli_connect_error());
}
if(isset($_POST['sub']))
{
  $username1 = $_POST['username'];
  $message = $_POST['message'];
  $email = $_POST['email'];
  $cellphone = $_POST['cellphone'];
  $sql_query = "INSERT INTO lmldata (username1,message,email,cellphone)
  VALUES ('$username1','$message','$email','$cellphone')";
  if(mysqli_query($connect, $sql_query))
  {
    echo "Connected";
  }
  else
  {
    echo "Error: " . $sql . "" . mysqli_error($connect);
  }
  mysqli_close($connect);
}
?>
