<?php

$host = "localhost";
$user = "ahad_guru";
$password = "A1h9a9d8";
$db = "ahad_forms";

$con = mysqli_connect($host,$user,$password,$db);

if(!$con){
	die("Error in Connection!!!".mysqli_connect_error());
}
else{
	echo"<br><h3>Submission Success!!!</h3>";
}

?>
