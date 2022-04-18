<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "c_share_site";

$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn){
  die("Error in connecting. ".mysqli_connect_error());
}
else
{
	echo "Successfull";
}
 