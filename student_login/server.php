<?php 

if(isset($_POST['send'])){
	$teacher_name= $_POST["teacher_name"];
	$dept_name= $_POST["dept_name"];
	$course_title= $_POST["course_title"];
	$section= $_POST["section"];
	$semester= $_POST["semester"];
	$year= $_POST["year"];
	$one_sub_present= $_POST["one_sub_present"];
	$two_com_skill= $_POST["two_com_skill"];
	$three_providing_info= $_POST["three_providing_info"];
	$four_puntuality= $_POST["four_puntuality"];
	$five_timely= $_POST["five_timely"];
	$six_arranges= $_POST["six_arranges"];
	$seven_incourage= $_POST["seven_incourage"];
	$eight_effort= $_POST["eight_effort"];
	$nine_develop= $_POST["nine_develop"];
	$ten_behaviour= $_POST["ten_behaviour"];

	mysql_connect("localhost","root","");
	mysql_select_db("db_final_project");

	$sql="INSERT INTO tbl_terform(teacher_name,dept_name,course_title,section,semester,year,one_sub_present,two_com_skill,three_providing_info,four_puntuality,five_timely,six_arranges,seven_incourage,eight_effort,nine_develop,ten_behaviour) VALUES('".$teacher_name."','".$dept_name."','".$course_title."','".$section."','".$semester."','".$year."','".$one_sub_present."','".$two_com_skill."','".$three_providing_info."','".$four_puntuality."','".$five_timely."','".$six_arranges."','".$seven_incourage."','".$eight_effort."','".$nine_develop."','".$ten_behaviour."')";

	if(mysql_query($sql)){
		header("Location: thank_you.php");
		exit();
	}
	else{
		echo mysql_error();
	}
}

?>