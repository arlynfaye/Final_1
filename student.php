<?php
require('connection_db.php');
	session_start();
	if (isset($_POST['logout'])) {
		session_destroy();
		header('Location:login.php');
	}
	elseif($_SESSION['login']=="student")
	{
		$user =$_SESSION['name'];
	}

	else
		header('Location:login.php');		

?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Page</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="mau2.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
	
</head>

<body style="background-color: #990000;">

	<div id="colorbody"></div>
<div></div>

<div id="wrap">

	<div id="header">
		<div class="background">
  <div class="transbox">
    <p style="padding-top: 40px; padding-bottom: 40px; background-color: white; color: #990000; letter-spacing: 10px;">BEARMI UNIVERSITY</p>
  </div>
</div>
	</div>
	<nav>
<div class="container" style="background-color:#ffd17a;">
	<form style="display: inline-flex;" action="#" method="POST">
		<input style="margin: 5px;" type="submit" name="logout" value="Logout">
	</form>
	
</div>
</nav>
		<?php

			$student_id=$_SESSION['student_id'];

			$sql = "SELECT * FROM student WHERE student_id='$student_id'";
				$result = mysqli_query($connectivity, $sql);

				if (mysqli_num_rows($result)<0) {
				   echo "No data found";
				}
				else{
					while ($row=mysqli_fetch_assoc($result)) {
					$student_id=$row['student_id'];
				 	$name=$row['name'];
					$email=$row['email'];
					$pass=$row['password'];
					$dob=$row['date_of_birth'];
					$gender=$row['Gender'];
					$address=$row['address'];
					$course=$row['course_type'];	
					$status=$row['status'];
				}	
		?>
		<br>
		<br>
		<div class="one"><?php 
			echo "Good day, ". $user . " the table below is your information.You  can edit or update your information below by clicking the update link and if you wish to cancel your enrollment request you can delete your account." ?> </div>

		
			<br>
			<div style="overflow-x:auto; width: 100%;">
					<table>
						<tr>
							<th>Student ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Date of Birth</th>
							<th>Gender</th>
							<th>Address</th>
							<th>Course</th>
							<th>Update</th>
							<th>Delete</th>
							<th>Status</th>
						</tr>
						<tr>
							<td><?=$student_id;?></td>
							<td><?=$name;?></td>
							<td><?=$email;?></td>
							<td><?=$dob;?></td>
							<td><?=$gender;?></td>
							<td><?=$address;?></td>
							<td><?=$course;?></td>
							<td><a href="update.php?s_id=<?=$student_id;?>"><button>UPDATE</button></a></td>
							<td><a href="insert_db.php?st_id=<?=$student_id;?>"><button>DELETE ACCOUNT</button></a></td>
							<td><?=$status;?></td>
						</tr>
					</table>
				<?php
			}
		?> 
	</div>
	<br>
	<div class="one">List of officially enrolled students<a href="pageEnrolled.html" sclass="button"> Go</a>
	</div>

		<br>
         <div class="one"> The table below is the list of courses that we offer, after deciding what your course is,you can input it by clicking the update link.</div>
		<div style="overflow-x:auto;">
			<br>
	<table>
	<tr>
	     <th>Courses<th>
		 
	</tr>
	<?php
        $conn = mysqli_connect("localhost", "root", "", "portal_college");
        if($conn-> connect_error){
        	die("Connection failed". $conn-> connect_error);
        }

        $sql = "SELECT id, course from courses";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
          while ($row = $result-> fetch_assoc()){
          	echo "<tr><td>". $row["id"] . "</td><td>" . $row["course"] . "</td></tr>";
          }
          echo "</table>";
        }
         else{
         	echo "0 result";
         }
         $conn-> close();
	?>
	</table>
    </div>
   <br>
         <div class="one"> Please prepare the following requirements and upload it, for you to complete your enrollment.Once you completed to fill up and submit all the needed requirments, your status will be updated if you are finnally enrolled.Please place all your soft copy requirements in one document.</div>
		<div style="overflow-x:auto;">
			<br>
    <table>
    <div class="one"><tr>
    	     <th><b> FOR NEW STUDENTS</th></b>
    	     <th><b> FOR THE TRANSFEREES</th></b>
    	     <th><b> Upload your file here:</th></b>
    	</tr>
   <tr>
 <td><p>Report Card (Form 137)<br>
Birth Certificate <br>
Good Moral Certificate)<br>
Entrance Examination Results<br>
NCAE Results)<br>
<br></p></td>

<td><p>Report Card (Form 137)<br>
Birth Certificate <br>
Good Moral Certificate<br>
NCAE Results)<br>
<br></p></td>

<td><form enctype="multipart/form-data" action="fileUpload.php" method="POST" style="padding-left: 10px;">
			choose a file to upload:
			<input name="uploadedfile" type="file"><br>
			<input type="submit" value="Upload File">
		</form></td>
<tr>
</div>
 </table>
 <br>
 <br>

	<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4" style="background-color:#ffd17a;">

  <!-- Footer Elements -->
  <div class="container">

  <div class="footer-copyright text-center py-3" align="center" style="color:white;">Visit:
    <a href="https://www.facebook.com/Bearmi-University-107406318466750/">BAMuniveristy</a>
  </div>
</footer>
<!-- Footer -->
 </div>
   </div>
</div>
</body>
</html>