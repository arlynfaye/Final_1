<?php
require('connection_db.php');
	session_start();
	if (isset($_POST['logout'])) {
		session_destroy();
		header('Location:login.php');
	}
	elseif($_SESSION['login']=="teacher")
	{
		$user =$_SESSION['name'];
	}

	else
		header('Location:login.php');		

?>
<!DOCTYPE html>
<html>
<head>
	<title>College portal teacher pannel</title>
	<style type="text/css">
		body{
			 background:#990000;
		
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
			background-color: #f2f2f2;
		}
		tr:nth-child(odd){
			background-color: #f9f9f9;
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
		@media screen and (min-width: 601px) {
  div.one {
    font-size: 20px;
    padding-left: 30px;
  }
}

@media screen and (max-width: 600px) {
  div.one {
    font-size: 18px;
    padding-left: 30px;
  }
}
#wrap {
  width:90%;
  background-color:white;
  color:inherit;
  padding:0;
  margin:30px auto 15px auto; 
}
	</style>
</head>

<body>
    <div class="jumbotron" style="background-image: url('logo.png');">
    <h1>BEARMI</h1>
  </div>
  <div id="wrap">
	<div style="background-color: #ffd17a; height: 30px; padding-top: 20px; text-align: center;">
	
	<form style="display: inline-flex;" action="#" method="POST">
		<input style="margin: 5px; " type="submit" name="logout" value="Logout">
	</form>
	</div>

	
		<?php

			$teacher_id=$_SESSION['teacher_id'];

			$sql = "SELECT * FROM teacher WHERE teacher_id='$teacher_id'";
			$result = mysqli_query($connectivity, $sql);

				if (mysqli_num_rows($result)<0) {
				   echo "No data found";
				}
				else{
					while ($row=mysqli_fetch_assoc($result)) {
			
						$teacher_id=$row['teacher_id'];
						$name=$row['name'];
						$email=$row['email'];
						$pass=$row['password'];
						$address=$row['address'];
						$dob=$row['Date_of_birth'];
						$gender=$row['gender'];
						$salary=$row['salary'];
						$department=$row['department'];	
					}			
			?>
			<script>
				function password() {
				    var x = document.getElementById('show');
				    if (x.style.display == 'block') {
				        x.style.display = 'none';
				    } 
				    else{
				        x.style.display = 'block';
				    }
				}
			</script>
			<br>
			<div class="one"><?php 
			echo "Good day, Maam/Sir". $user . " the table below is your information.You  can edit or update your information below by clicking the update link." ?> </div>
			     <div style="overflow-x:auto;">
				<table style="margin-left: auto; margin-right: auto; margin-top: 60px" border="2px";>
					<tr>
						<th>Teacher ID</th>
						<th>Name</th>
						<th>Email</th>
						
						<th>Address</th>
						<th>Date of Birth</th>
						<th>Gender</th>
						<th>Salary</th>
						<th>department</th>
						<th>Update</th>
						<th>Delete</th>	
					</tr>
					<tr>
						<td><?=$teacher_id;?></td>
						<td><?=$name;?></td>
						<td><?=$email;?></td>
						<td><?=$address;?></td>
						<td><?=$dob;?></td>
						<td><?=$gender;?></td>
						<td><?=$salary;?></td>
						<td><?=$department;?></td>
						<td><a href="update.php?t_id=<?=$teacher_id;?>"><button>UPDATE</button></a></td>
						<td><a href="insert_db.php?tt_id=<?=$teacher_id;?>"><button>DELETE ACCOUNT</button></a></td>
					</tr>	
				</table>
			<?php
			}
		?> 
	</div>
	<br>
	<br>
	
	<center>
		<div class="one">List of officially enrolled students</div>
      <table>
	<tr>
		<th>Names<th>
	     <th>Courses<th>
		 
	</tr>
	<?php
        $conn = mysqli_connect("localhost", "root", "", "portal_college");
        if($conn-> connect_error){
        	die("Connection failed". $conn-> connect_error);
        }

        $sql = "SELECT id, name, course from enrolled";
        $result = $conn-> query($sql);

        if($result-> num_rows > 0){
          while ($row = $result-> fetch_assoc()){
          	echo "<tr><td>". $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["course"] . "</td></tr>";
          }
          echo "</table>";
        }
         else{
         	echo "0 result";
         }
         $conn-> close();
	?>
	</table>

	<?php
				$sql = "SELECT * FROM student";
				$result = mysqli_query($connectivity, $sql);

				if (mysqli_num_rows($result)<=0) {
				   echo "Student's data not found";
				}
				else {
		?>
					<br>
					<div class="one" style="margin-bottom: 10px; margin-top: 30px;">You can update all Student data from this table</div>

           <div style="overflow-x:auto; width: 95%;">
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
		
			<br><a style="position: center;" href="update.php?user='student'"><button>Add new Student</button></a>
			<br><br>
			<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext" style="margin-top: 30px">1 / 3</div>
  <img src="images/pic2.jpg" style="width: 50%;">
  <div class="text">Classroom</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/pic3.jpg" style="width:50%">
  <div class="text">Computer Laboratory</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/pic4.jpg" style="width:50%">
  <div class="text">Science Laboratory</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

	</center>
	<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4" style="background-color:#ffd17a; height: 50px;">

  <!-- Footer Elements -->
  <div class="container">

  <div class="footer-copyright text-center py-3" align="center" style="color:white;">Visit:
    <a href="https://www.facebook.com/Bearmi-University-107406318466750/">BAMuniveristy</a>
  </div>
</footer>
<!-- Footer -->
</div>
</div>
</body>
</html>