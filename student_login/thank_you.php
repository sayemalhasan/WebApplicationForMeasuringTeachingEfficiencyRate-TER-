<?php


ob_start();
session_start();

$id=$_SESSION['id'];
if($id== NULL){
    header('Location: index.php');
}

if (isset($_GET['status'])) {
    require 'std_function.php';
    std_logout();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Thank You</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<style>
.b1{
background:url("b1.jpg");
background-size: 100%;
}
.b2{
height:400px;
width:100%;
/*background:url("b1.jpg");*/
background-color: #344045a3;
box-shadow: 5px 10px 18px gray;
margin-top:50px;
}
.btn {
margin-left:280px;
background-color:red;
border:none;
}
</style>
<body class="b1">

<div class="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
		<div class="b2">
		<h1 style="color:#b8d2e8;text-align:center;font-size:40px;padding-top:100px;">Thank You for your cooperation</h1>
		<p style="color:#d2d1cf;text-align:center;letter-spacing:5px;padding-top:20px;">Your response will help us to improve academic invironment,Quality of Education and teachers efficiency.</p>
		<button type="button" class="btn btn-primary"><a href="?status=logout" style="color: white;">Logout</a></button>
		
		</div>
		<h6 style="color:white;text-align:center;padding-top:100px;">@2018 UITS-All rights reserved</h6>
	</div>
    <div class="col-md-2"></div>
  </div>
</div>

</body>
</html>
