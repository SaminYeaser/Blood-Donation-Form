<?php

$host = "___your__websites___host____";
$user = "___your__websites___mysql___username____";
$password = "___your__websites___mysql___password___";
$db = "___your__websites___database____name____";

$con = mysqli_connect($host,$user,$password,$db);

if(!$con){
	die("Error in Connection!!!".mysqli_connect_error());
}
else{
	echo"<br><h3>Submission Success!!!</h3>";
}

?>
