<?php

function std_login_check($data){
	require 'db_connect.php';
	$password=  md5($data['password']);
	$sql="SELECT * FROM tbl_student WHERE student_id='$data[student_id]' AND password='$password' AND deletion_status=1 ";

	if (mysqli_query($con, $sql) ) {
		$query_result=mysqli_query($con, $sql);
		$std_info=mysqli_fetch_assoc($query_result);

		if($std_info) {
			session_start();
			$_SESSION['id']=$std_info['id'];
			$_SESSION['student_id']=$std_info['student_id'];

			header('Location: feedback_dropdown.php');
		}  else {
			$message='Please use valid id & password';
			return $message;
		}

	} else{
		die('Query problem'. mysqli_error($con) );
	}
}

function std_logout() {
	unset($_SESSION['id']);
	// unset($_SESSION['student_id']);

	header('Location: ../index.php');
}

?>