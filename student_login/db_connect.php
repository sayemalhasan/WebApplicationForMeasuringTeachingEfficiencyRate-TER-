<?php

$host_name='localhost';
$user_name='root';
$password='';
$db_name='db_final_project';

$con= mysqli_connect($host_name,$user_name,$password);
if($con){
	$db_select=mysqli_select_db($con,$db_name);
	if ($db_name) {
		
	}
	else{
		die('Database is not selected'.mysqli_error($con));
	}
}
else{
	die('Database connection failed'.mysqli_error($con));
}

?>