<?php
	require('connection_db.php');
	session_start();
	if (isset($_POST['logout'])) {
		session_destroy();
		header('Location:login.php');
	}
	
	elseif($_SESSION['login']=="admin")
	{
		$user =$_SESSION['user'];
		if(isset($_SESSION['message']))
		{	
			echo '<script type="text/javascript">alert("'.$_SESSION['message'].'");</script>';
			unset($_SESSION["message"]); 
		}
	}
	else
		header('Location:login.php');		

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>try</title>
	<link rel="stylesheet" type="text/css" href="adminDesign.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script type='text/javascript' src='js/mobile.js'></script>
	<style type="text/css">
		body{
			background: #990000;
		}
		.input{
			width: 373px;
			margin-top: 10px;
			height: 35px; 
			padding-left: 15px;
			font-size: 18px;
		}
		.flex{
			display: inline-flex;
		}
		table {
		    border-collapse: collapse;
		    width: auto;
		}
		th{
			text-align: center;
			background-color: #ca3433;
		    color: white;
		}

		td {
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even){
			background-color: #f2f2f2
		}
		tr:nth-child(odd){
			background-color: #f9f9f9
		}
		.jumbotron{
			height: 100px;
			background-size: 130px;
			background-repeat: no-repeat;
			margin-bottom: 10px;
			background-color: white;
		}
		.jumbotron h1{
			padding-left: 150px;
			padding-top: 15px;
			font-family: clarendon;
			color:#800000;
			font-size: 40pt;

		}
	</style>
</head>

<body> 
     <div id="header">
		<h1><a href="index.html">BEARMI UNIVERSITY <span></span></a></h1>
     
     <ul id="navigation">
			<li class="current">
				<a href="admin.php">Main</a>
			</li>
			<li>
				<a href="enrolled.php">Enrolled</a>
			</li>
			<li>
				<a href="course.php">Courses</a>
			</li>
		</ul>
	</div>
	<div id="wrap">
		<div style="background-color: #ffd17a; height: 35px; padding-top: 7px; text-align: center;">
	
		<form style="display: inline-flex;" action="#" method="POST">
			<input style="margin: 5px;" type="submit" name="logout" value="Logout">
		</form>
	</div>

		<?php
				$sql = "SELECT * FROM student";
				$result = mysqli_query($connectivity, $sql);

				if (mysqli_num_rows($result)<=0) {
				   echo "Student's data not found";
				}
				else {
		?>
					<br>
					<h2 style="padding-left: 25px; color: black;"> Admin you can update all Student data from this table</h2>

                    <div style="overflow-x:auto;">
					<table>
						<tr>
							<th>S.N</th>
							<th>Name</th>
							<th>Email</th>
							<th>Password</th>
							<th>Date of Birth</th>
							<th>Gender</th>
							<th>Address</th>
							<th>Course</th>
							<th>Update</th>
							<th>Delete</th>
							
						</tr>
					
				<?php
					while ($row=mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?=$row['student_id'];?></td>
							<td><?=$row['name'];?></td>
							<td><?=$row['email'];?></td>
							<td><?=$row['password'];?></td>
							<td><?=$row['date_of_birth'];?></td>
							<td><?=$row['Gender'];?></td>
							<td><?=$row['address'];?></td>
							<td><?=$row['course_type'];?></td>
							<td><a href="update.php?s_id=<?=$row['student_id']?>"><button>UPDATE</button></a></td>
							<td><a href="insert_db.php?s_id=<?=$row['student_id']?>"><button>DELETE</button></a></td>
						</tr>
						<?php
					}
					?>
					</table>
				<?php
				}
			?> 
		
			<br><a style="margin-left: 45%;" href="update.php?user='student'"><button>Add new Student</button></a>
			<br><br>
			<hr>
			<?php
				$sql = "SELECT * FROM teacher";
				$result = mysqli_query($connectivity, $sql);

				if (mysqli_num_rows($result)<=0) {
				   echo "Teacher's data not found";
				}
				else {
		?>
					<br>
					<h2 style="padding-left: 25px; color: black;">Admin you can update all teacher data from this table.</h2>

                    <div style="overflow-x:auto;">
					<table>
						<tr>
							<th>S.N</th>
							<th>Name</th>
							<th>Email</th>
							<th>Password</th>
							<th>Date of Birth</th>
							<th>Gender</th>
							<th>Address</th>
							<th>Salary</th>
							<th>department</th>
							<th>Update</th>
							<th>Delete</th>
							
						</tr>
					
				<?php
					while ($row=mysqli_fetch_assoc($result)) {
						?>
						<tr>
							<td><?=$row['teacher_id'];?></td>
							<td><?=$row['name'];?></td>
							<td><?=$row['email'];?></td>
							<td><?=$row['password'];?></td>
							<td><?=$row['Date_of_birth'];?></td>
							<td><?=$row['gender'];?></td>
							<td><?=$row['address'];?></td>
							<td><?=$row['salary'];?></td>
							<td><?=$row['department'];?></td>
							<td><a href="update.php?t_id=<?=$row['teacher_id']?>"><button>UPDATE</button></a></td>
							<td><a href="insert_db.php?t_id=<?=$row['teacher_id']?>"><button>DELETE</button></a></td>
						</tr>
						<?php
					}
					?>
					</table>
					
				<?php
				}
			
			?> 
		</div>
		<br><a style="margin-left: 45%;" href="update.php?tu='teacher'"><button>Add new Teacher</button></a>
		<br>
		<br>
		<footer style="background-color: #ffd17a; height: 65px; color:white;">
		<div style="padding-top: 25px; padding-left: 25px; position: center;">&copy; BEARMI University</div>
	</footer>

	</div>
</div>

</body>
</html> 