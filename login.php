<?php
	session_start();
		if(isset($_SESSION['login']))
		{
			header('Location:'.$_SESSION['login'].".php");
		}
		elseif(isset($_SESSION['message']))
		{	
			echo '<script type="text/javascript">alert("'.$_SESSION['message'].'");</script>';
			header('Refresh:0');
			session_destroy();
		}
		elseif(isset($_SESSION['error']))
		{
			echo '<script type="text/javascript">alert("'.$_SESSION['error'].'");</script>';
			header('Refresh:0');
			session_destroy();
		}
		elseif (isset($_SESSION['n_user'])) {
			echo '<script type="text/javascript">alert("'.$_SESSION['n_user'].'");</script>';
			header('Refresh:0');
			session_destroy();
		}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>BEARMI Login Form</title>
	<meta http-equiv="Content-Type" content="text/html; initial-scale=1" />
    <link rel="stylesheet" href="mau.css" type="text/css" />
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
</head>

<body style="background-color:#990000;">

	<button style="width: 70px; margin-left: 89%; margin-bottom: 0px; margin-top: 5px;" type="button" class="btn-default"><a class="navbar-brand" href="index.html" style="color: black;">Home</a></button>
<div id="colorbody"></div>
	<div id="wrap">
	<!-- Navbar/login  -->  
	<form style="background-color: #ffd17a; height: 80px; padding-top: 20px;" action="login_check.php" method="POST">
		<div style="padding: 10px; width: 600px; display: inline-flex; ">
			
		</div>
		<div align="right" style=" display: inline; width: 700px;">
			<select style="margin: 5px;" name="login_type">
				<option value="admin">Admin</option>
				<option value="teacher">Teacher</option>
				<option value="student">Student</option>
			</select>

			<div class="flex">
				<div><input style="width: 180px; margin: 5px;" type="text" name="username" placeholder="username/email" required></div>
				
				<div><input style="width: 130px; margin: 5px;" type="password" name="password" placeholder="password" required></div>
			</div>
			<input style="margin: 5px;" type="submit" name="login" value="Login">
		</div>
         
	</form><!-- end of navbar/login--> 
	<script>
		function teacher() {
		    var x = document.getElementById('teacher');
		    if (x.style.display == 'block') {
		        x.style.display = 'none';
		    } 
		    else{
		        x.style.display = 'block';
		    }
		}

		function student() {
		    var x = document.getElementById('student');
		    if (x.style.display == 'block') {
		        x.style.display = 'none';
		    } 
		    else {
		        x.style.display = 'block';
		    }
		}
	</script>

	<!-- registration-->  
	<div>
		<div><img style="margin-right: 70%; height:300px; position: absolute; margin-top: 80px; margin-left: 45px;" src="logo.png"></div>
		<form action="insert_db.php" method="POST">
			<div style="margin-left: 500px; padding: 25px; padding-top: 10px; padding-bottom: 5px;">

			<b style="font-size: 30px; font-style: bold;  color: #990000;"> Register Here!</b><br>		
				<div style="width: 470px;">
					<div class="flex"><input class="input" type="text" name="name" placeholder="Please enter your full Name" required></div><br>

					<div class="flex"><input class="input" type="email" name="email" placeholder=" Enter your Email Address" required></div><br>

					<div class="flex" style="width: 200px;"> <input style="width: 200px;" class="input" type="password" name="password" placeholder="Create your Password" required></div>
          
					<div class="flex"><input style="width: 195px;" class="input" type="password" name="confirm_password" placeholder="Confirm Password" required></div><br>

					<div class="flex" style="width: 168px; margin-top: 30px;"> <b>Date of Birth:</b></div>
					<div class="flex"><input style="width: 225px;" class="input" type="input" name="Date_of_birth" placeholder="DD/MM/YY" required></div><br>

					<div class="flex" style="width: 200px; margin-top: 25px;"> <b>Gender:</b></div>
					<div class="flex" style="margin-top: 5px; margin-left: 35px;">
						<input type="radio" name="Sex" value="Male" required>Male
						<input type="radio" name="Sex" value="Female">Female
					</div><br>

					<div class="flex"><input class="input" type="text" name="address" placeholder="Your Address" required></div><br>
					
					<div class="flex" style="width: 165px; margin-top: 30px;"> <b> </b></div>
					<div class="flex">
						<div style=" margin-top: 5px;">
						<select required style="margin: 5px; width: 225px; height: 45px; background-color: #d4e1cc; font-weight: bold;" class="input" name="c_type">
						<option type="button" value=""></option>
						<option type="button" onclick="student()" value="student"> Student</option>
							</select>

						</div>
					</div>
				</div>
			</div>

			<div id="teacher" hidden style="margin-left: 430px; padding: 25px; margin-top: -40px; margin-bottom: -15px;">

				<div class="flex"><input class="input" type="text" name="department" placeholder="Your working department"></div><br>

				<div class="flex"><input class="input" type="text" name="salary" placeholder="Your salary"></div><br>
				
			</div>

			<div id="student" hidden style="margin-left: 430px; padding: 25px; margin-top: -40px; margin-bottom: -15px;">

				<div class="flex"><input class="input" type="text" name="course" placeholder="Course name"></div><br>

			</div>
			<div class="flex"><input class="input" style="margin-left: 525px; height: 45px; width: 150px; margin-top: 5px; border-radius: 5px; background-color: #990000; font-weight: bold; color: white; margin-bottom: 10px;" type="reset" value="Clear"></div>

			<div class="flex"><input class="input" style="margin-left: 430px; width: 170px; height: 45px; margin-top: 5px; margin-left: 73px; border-radius: 5px; background-color: #990000; font-weight: bold; color: white;" type="submit" value="Register"></div>
		</form>
		<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4" style="background-color:#ffd17a;">

  <!-- Footer Elements -->
  <div class="container">

  <div class="footer-copyright text-center py-3" align="center" style="color: white;">Visit:
    <a href="https://www.facebook.com/Bearmi-University-107406318466750/">BAMuniveristy</a>
  </div>
</footer>
<!-- Footer -->
	</div></div><!-- end of registration part and footer-->  


</body>
</html>