<?php
	session_start();
	require('connection_db.php');

	$Account_C = $_POST['c_type'];

	if ($Account_C == 'teacher') {
		$Name=mysqli_real_escape_string($connectivity,$_POST['name']);
		$Email=mysqli_real_escape_string($connectivity,$_POST['email']);
		$Pass=mysqli_real_escape_string($connectivity,$_POST['password']);
		$Dob=mysqli_real_escape_string($connectivity,$_POST['Date_of_birth']);
		$Account=mysqli_real_escape_string($connectivity,$_POST['c_type']);
		$Sex=mysqli_real_escape_string($connectivity,$_POST['Sex']);
		$Address=mysqli_real_escape_string($connectivity,$_POST['address']);

		$Department=mysqli_real_escape_string($connectivity,$_POST['department']);
		$Salary=mysqli_real_escape_string($connectivity,$_POST['salary']);

		$username= $_POST['email'];
		$Pass=$_POST['password'];
		$C_Pass=$_POST['confirm_password'];

		$Checking = "SELECT * FROM teacher WHERE email ='$username'";
		$result= mysqli_query($connectivity,$Checking);
		$row_count= mysqli_num_rows($result);
			if($row_count > 0)
			{
				$_SESSION['message']=" Dear, ". $Name." You are already registered.";
				header("Location:login.php");
			}
			elseif ($Pass != $C_Pass) {
				$_SESSION['error']="Password do not match";
				header('Location:login.php');
			}
			else{
				$Database="INSERT INTO teacher(name,email,password,address,Date_of_birth,gender,salary,department)VALUES('$Name','$Email','$Pass','$Address','$Dob','$Sex','$Photo','$Salary','$Department')";
				if(mysqli_query($connectivity,$Database))
				{
					$_SESSION['message']=" Dear, ". $Name." your are registered.";
					header("Location:teacher.php");
				}
				else
				{
					echo '<script type="text/javascript">alert("!! May be SQL query wrong");</script>';
					echo mysqli_error($connectivity);
				}
			}
	}
	elseif ($Account_C == 'student') {

		$Name=mysqli_real_escape_string($connectivity,$_POST['name']);
		$Email=mysqli_real_escape_string($connectivity,$_POST['email']);
		$Pass=mysqli_real_escape_string($connectivity,$_POST['password']);
		$Dob=mysqli_real_escape_string($connectivity,$_POST['Date_of_birth']);
		$Account=mysqli_real_escape_string($connectivity,$_POST['c_type']);
		$Sex=mysqli_real_escape_string($connectivity,$_POST['Sex']);
		$Address=mysqli_real_escape_string($connectivity,$_POST['address']);

		$Course=mysqli_real_escape_string($connectivity,$_POST['course']);

		$username= $_POST['email'];
		$Pass=$_POST['password'];
		$C_Pass=$_POST['confirm_password'];

		$Checking = "SELECT * FROM student WHERE email ='$username'";
		$result= mysqli_query($connectivity,$Checking);
		$row_count= mysqli_num_rows($result);
			if($row_count > 0)
			{
				$_SESSION['message']=" Dear, ". $Name." You are already registered.";
				header("Location:login.php");
			}
			elseif ($Pass != $C_Pass) {
				$_SESSION['error']="Password do not match";
				header('Location:login.php');
			}
			else{
				$Database="INSERT INTO student(name,email,password,date_of_birth,Gender,address,course_type)VALUES('$Name','$Email','$Pass','$Dob','$Sex','$Address','$Course')";
			
				if(mysqli_query($connectivity,$Database))
				{
					$_SESSION['message']=" Dear, ". $Name." you are registered.";
					header("Location:student.php");
				}
				else
				{
					echo mysqli_error($connectivity);
				}
			}
	}

	elseif (isset($_POST['s_id'])) {

		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$dob=mysqli_real_escape_string($connectivity,$_POST['dob']);
		$gender=$_POST['gender'];
		$address=$_POST['address'];
		$course=$_POST['course'];
		$student_id=$_POST['s_id'];

			$sql="UPDATE student SET name='$name',email='$email',password='$password',date_of_birth='$dob',Gender='$gender',address='$address',course_type='$course' WHERE student_id=$student_id";
				if(mysqli_query($connectivity,$sql)){
					header('location:admin.php');
				}
				else{
					mysqli_error($connectivity);
				}
			
	}
	elseif (isset($_POST['t_id'])) {

		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$salary=$_POST['salary'];
		$department=$_POST['department'];
		$teacher_id=$_POST['t_id'];

			$sql="UPDATE teacher SET name='$name',email='$email',password='$password',address='$address',Date_of_birth='$dob',gender='$gender',salary='$salary',department='$department' WHERE teacher_id=$teacher_id";
				if(mysqli_query($connectivity,$sql)){
					header('location:admin.php');
				}
				else{
					mysqli_error($connectivity);
				}
			
	}


	elseif (isset($_GET['s_id'])) {
		$student_id=$_GET['s_id'];

		$sql="DELETE FROM student WHERE student_id=$student_id";
			if(mysqli_query($connectivity,$sql)){
				header('location:admin.php');
			}
			else{
				mysqli_error($connectivity);
			}
	}
	elseif (isset($_GET['t_id'])) {
		$teacher_id=$_GET['t_id'];

		$sql="DELETE FROM teacher WHERE teacher_id=$teacher_id";
			if(mysqli_query($connectivity,$sql)){
				header('location:admin.php');
			}
			else{
				mysqli_error($connectivity);
			}
	}


	elseif (isset($_GET['st_id'])) {
		$student_id=$_GET['st_id'];

		$sql="DELETE FROM student WHERE student_id=$student_id";
			if(mysqli_query($connectivity,$sql)){
				header('location:login.php');
				session_destroy();
			}
			else{
				mysqli_error($connectivity);
			}
	}
	elseif (isset($_GET['tt_id'])) {
		$teacher_id=$_GET['tt_id'];

		$sql="DELETE FROM teacher WHERE teacher_id=$teacher_id";
			if(mysqli_query($connectivity,$sql)){
				header('location:login.php');
				session_destroy();
			}
			else{
				mysqli_error($connectivity);
			}
	}
	else
	{
		echo mysqli_error($connectivity);
	}
	//echo $Account_C;


if ($Account_C == 'enrolled') {
		$Name=mysqli_real_escape_string($connectivity,$_POST['name']);
		$Course=mysqli_real_escape_string($connectivity,$_POST['course']);

		
			
				$Database="INSERT INTO enrolled(name,course)VALUES('$Name','$Course')";
				if(mysqli_query($connectivity,$Database))
				{
					$_SESSION['message']=" Dear, ". $Name." your are registered.";
					header("Location:admin.php");
				}
				else
				{
					echo '<script type="text/javascript">alert("!! May be SQL query wrong");</script>';
					echo mysqli_error($connectivity);
				}
			}

	elseif (isset($_POST['e_id'])) {

		$name=$_POST['name'];
		$course=$_POST['course'];
			$sql="UPDATE enrolled SET name='$name',course='$course' WHERE id";
				if(mysqli_query($connectivity,$sql)){
					header('location:admin.php');
				}
				else{
					mysqli_error($connectivity);
				}
			
	}

	elseif (isset($_GET['e_id'])) {
		$id=$_GET['e_id'];

		$sql="DELETE FROM enrolled WHERE id";
			if(mysqli_query($connectivity,$sql)){
				header('location:admin.php');
			}
			else{
				mysqli_error($connectivity);
			}
	}
	else
	{
		echo mysqli_error($connectivity);
	}
	//echo $Account_C;

?>