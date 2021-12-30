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
	<title>Admin enrolled page</title>
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
	<br>
	 <div style="overflow-x:auto;">
	<table>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Course</th>
			<th>Action</th>
		<?php
           include "connection_db.php";

           $query = "SELECT * FROM enrolled";
           $result = mysqli_query($connectivity, $query);

           if(mysqli_num_rows($result) > 0){
           	while($row = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $row["id"]; ?></td>
			<td><?php echo $row["name"]; ?></td>
			<td><?php echo $row["course"]; ?></td>
			<td>
				<a href="editForm.php?id=<?php echo $row["id"];?>">
				<button>Edit</button></a>
				<a href="delete.php?id=<?php echo $row["id"];?>">
				<button>Delete</button></a>
				

			</td>
		</tr>
		<?php
           }
         }
         else{
         	echo "0 results";
         }
		?>
	</table>
    <center>
	<a class="current" href="insertForm.html"><input type="submit" value="Add data" style="margin-top: 10px;"></a><br>
</center>
		<br>
		<br>
		<footer style="background-color: #ffd17a; height: 65px; color:white;">
		<div style="padding-top: 25px; padding-left: 25px; position: center;">&copy; BEARMI University</div>
	</footer>

	</div>

</body>
</html> 