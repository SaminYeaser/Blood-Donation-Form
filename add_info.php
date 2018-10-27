<?php
require "init.php";
$name = $_POST["name"];
$email = $_POST["email"];
$gender = $_POST["gender"];
$age_granted = $_POST["age_granted"];
$weight_granted = $_POST["weight_granted"];
$height_granted = $_POST["height_granted"];
$blood_group = $_POST["blood_group"];
$previous_donator = $_POST["previous_donator"];
$regular_medicine = $_POST["regular_medicine"];
$smoker = $_POST["smoker"];
$alcohol = $_POST["alcohol"];
$drugs_addiction = $_POST["drugs_addiction"];
$contact_number = $_POST["contact_number"];
$current_place = $_POST["current_place"];
	$agree = $_POST["agree"];

$sql= "insert into donner_details (name,email,gender,age_granted,weight_granted,height_granted,
																		blood_group,previous_donator,regular_medicine,smoker,alcohol,
																		drugs_addiction,contact_number,current_place,agree)
																		values('$name','$email','$gender','$age_granted',
																					'$weight_granted','$height_granted','$blood_group',
																					'$previous_donator','$regular_medicine','$smoker',
																					'$alcohol','$drugs_addiction','$contact_number',
																					'$current_place','$agree');";

if(mysqli_query($con,$sql)){
	$content = file_get_contents("thank_you.php");
	echo $content;
}else{
	echo"Server Error!".mysqli_error($con);
}

?>
