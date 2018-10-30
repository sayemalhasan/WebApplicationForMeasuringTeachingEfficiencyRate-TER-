<?php

session_start();

if(isset($_SESSION['id'])){
	$id=$_SESSION['id'];
	if ($id != NULL) {
		header('Location: feedback_dropdown.php');
	}
}

if (isset($_POST['btns'])) {
	require 'std_function.php';
	std_login_check($_POST);
}

?>

<html>
<head>

<title>Student Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   
<link rel="stylesheet" href="main.css">

</head>
<body class="body">
	
		<!-- <div class="col-md-6 box text-center mx-auto"> -->
			<!-- <form class="modal-content animate" action="/action_page.php"> -->
				<form method="post" action="">
				
				<div class="container">
					<div class="col-md-6 login mx-auto">
						<h3 class="title"><b>Login Here</b></h3>
					  <label for="uname"><b>Student ID</b></label>
					  <input type="text" placeholder="Enter ID" name="student_id" required>

					  <label for="psw"><b>Password</b></label>
					  <input type="password" placeholder="Enter Password" name="password" required>
						
					  <button type="submit" name="btns">Login</button>
					  <label>
						<input type="checkbox" checked="checked" name="remember"> Remember me
					  </label>
					</div>
				</div>
				<div class="container">
					<div class="col-md-6 login mx-auto">
					  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><a href="../index.php">Cancel</a></button>
					  <span class="psw" style="float:left;margin-left:10px;margin-top:-50px">Forgot <a href="#">password?</a></span>
					</div>
				</div>
				</form>
		
</body>
</html>