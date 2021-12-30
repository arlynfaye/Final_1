<?php
	require('connection_db.php');

	if (isset($_GET['s_id'])) {
		$student_id=$_GET['s_id'];
		$sql="SELECT * FROM student WHERE student_id=$student_id";
		$result=mysqli_query($connectivity,$sql);
		$row=mysqli_fetch_assoc($result);
		?>
		<style type="text/css">
      body{
         width: 90%;
  height: 90vh;
  background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(images/school.jpg);
  background-size: cover;
  background-position: center;
      }
      #box{
         border: 2px solid black;
         width: 400px;
      }
   	form input {
			    width: 528px;
			    height: 40px;
			    font-size: 21px;
			    font-family: Times New Roman;
			    padding-left: 15px;
			}
		</style>
		<b style="margin-left: 400px; font-size: 30px; color: red;">Student data update Form </b>
		<form style="margin-left: 400px; width: 250px; color: white " action="insert_db.php" method="POST">
			<input type="hidden" name="s_id" value=<?=$student_id?>><br/>
			Name:<input required type="text" name="name" value=<?=$row['name'];?>><br/>
			Email:<input required type="email" name="email" value=<?=$row['email'];?>><br/>
			Password:<input required type="text" name="password" value=<?=$row['password'];?>><br/>
			Date of Birth:<input required type="date" name="dob" value=<?=$row['date_of_birth'];?>><br/>
			Gender:<input required type="text" name="gender" value=<?=$row['Gender'];?>><br/>
			Address:<input required type="text" name="address" value=<?=$row['address'];?>><br/>
			Course:<input required type="text" name="course" value=<?=$row['course_type'];?>><br/>
			<input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Update">
		</form>
	<?php
	}


	elseif (isset($_GET['t_id'])) {
		$teacher_id=$_GET['t_id'];
		$sql="SELECT * FROM teacher WHERE teacher_id=$teacher_id";
		$result=mysqli_query($connectivity,$sql);
		$row=mysqli_fetch_assoc($result);
		?>
		<style type="text/css">
      body{
         width: 90%;
  height: 90vh;
  background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(images/school.jpg);
  background-size: cover;
  background-position: center;
      }
      #box{
         border: 2px solid black;
         width: 400px;
      }
   	form input {
			    width: 528px;
			    height: 40px;
			    font-size: 21px;
			    font-family: Times New Roman;
			    padding-left: 15px;
			}
		</style>
		<b style="margin-left: 400px; font-size: 30px; color: red;">Teacher data update Form</b> 
		<form style="margin-left: 400px; width: 250px; color: white;" action="insert_db.php" method="POST">
			<input type="hidden" name="t_id" value=<?=$teacher_id?>><br/>
			Name:<input required type="text" name="name" value=<?=$row['name'];?>><br/>
			Email:<input required type="email" name="email" value=<?=$row['email'];?>><br/>
			Password:<input required type="text" name="password" value=<?=$row['password'];?>><br/>
			Address:<input required type="text" name="address" value=<?=$row['address'];?>><br/>
			Date of Birth:<input required type="date" name="dob" value=<?=$row['Date_of_birth'];?>><br/>
			Gender:<input required type="text" name="gender" value=<?=$row['gender'];?>><br/>
			Salary:<input required type="text" name="salary" value=<?=$row['salary'];?>><br/>
			Department:<input required type="text" name="department" value=<?=$row['department'];?>><br/>
			<input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Update">
		</form>
	<?php
	}


	elseif (isset($_GET['user'])) {
		?>
		<style type="text/css">
      body{
         width: 90%;
  height: 90vh;
  background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(images/school.jpg);
  background-size: cover;
  background-position: center;
      }
      #box{
         border: 2px solid black;
         width: 400px;
      }
   	form input {
			    width: 528px;
			    height: 40px;
			    font-size: 21px;
			    font-family: Times New Roman;
			    padding-left: 15px;
			}
		</style>

		<b style="margin-left: 400px; font-size: 30px; color: red;">Student Registration Form</b>
		<form style="margin-left: 400px; width: 250px; color: white;" action="update_by_admin.php" method="POST">
			<input type="hidden" name="c_type" value="student"><br/>
			Full Name<input required type="text" name="name" placeholder="Full Name"><br/>
			Email<input required type="text" name="email" placeholder="email address"><br/>
			Password<input required type="password" name="password" placeholder="Password"><br/>
			Confirm Password<input required type="password" name="confirm_password" placeholder="Confirm Password"><br/>
			Date of Birth<input required type="date" name="Date_of_birth"><br/>
			Gender<input required type="text" name="Sex" placeholder="sex"><br/>
			Address<input required type="text" name="address" placeholder="address"><br/>
			Course<input required type="text" name="course" placeholder="course"><br/>
			<input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Register">
		</form>
	<?php
	}
	elseif (isset($_GET['tu'])) {
		?>
		<style type="text/css">
      body{
         width: 90%;
  height: 90vh;
  background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(images/school.jpg);
  background-size: cover;
  background-position: center;
      }
      #box{
         border: 2px solid black;
         width: 400px;
      }
   	form input {
			    width: 528px;
			    height: 40px;
			    font-size: 21px;
			    font-family: Times New Roman;
			    padding-left: 15px;
			}
		</style>

		<b style="margin-left: 400px; font-size: 30px; color: red;">Teacher Registration Form</b>
		<form style="margin-left: 400px; width: 250px; color: white;" action="update_by_admin.php" method="POST">
			<input required type="hidden" name="c_type" value="teacher"><br/>
			Name:<input required type="text" name="name" placeholder="Full Name"><br/>
			Email:<input required type="text" name="email" placeholder="Email"><br/>
			Password:<input required type="password" name="password" password><br/>
			Confirm Password:<input required type="password" name="confirm_password" password><br/>
			Address:<input required type="text" name="address" placeholder="Address"><br/>
			Date of Birth:<input required type="date" name="Date_of_birth"><br/>
			Gender:<input required type="text" name="Sex" placeholder="Gender"><br/>
			Salary:<input required type="text" name="salary" placeholder="Salary"><br/>
			Department:<input required type="text" name="department" placeholder="department"><br/>
			<input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Register">
		</form>
	<?php
	}


elseif (isset($_GET['e_id'])) {
		$id=$_GET['e_id'];
		$sql="SELECT * FROM enrolled WHERE id=$id";
		$result=mysqli_query($connectivity,$sql);
		$row=mysqli_fetch_assoc($result);
		?>
		<style type="text/css">
      body{
         width: 90%;
  height: 90vh;
  background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(images/school.jpg);
  background-size: cover;
  background-position: center;
      }
      #box{
         border: 2px solid black;
         width: 400px;
      }
   	form input {
			    width: 528px;
			    height: 40px;
			    font-size: 21px;
			    font-family: Times New Roman;
			    padding-left: 15px;
			}
		</style>
		<b style="margin-left: 400px; font-size: 30px; color: red;">Enrolled Student data update Form</b>
		<form style="margin-left: 400px; width: 250px; color: white;" action="insert_db.php" method="POST">
			<input type="hidden" name="e_id" value=<?=$id?>><br/>
			Name:<input required type="text" name="name" value=<?=$row['name'];?>><br/>
			Course:<input required type="text" name="course" value=<?=$row['course'];?>><br/>
			<input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Update">
		</form>
<?php
	}


	elseif (isset($_GET['en'])) {
		?>
		<style type="text/css">
      body{
         width: 90%;
  height: 90vh;
  background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(images/school.jpg);
  background-size: cover;
  background-position: center;
      }
      #box{
         border: 2px solid black;
         width: 400px;
      }
   	form input {
			    width: 528px;
			    height: 40px;
			    font-size: 21px;
			    font-family: Times New Roman;
			    padding-left: 15px;
			}
		</style>

		<b style="margin-left: 400px; font-size: 30px; color: red;">Enrolled Student Registration Form</b> 
		<form style="margin-left: 400px; width: 250px; color: white;" action="update_by_admin.php" method="POST">
			<input type="hidden" name="c_type" value="enrolled"><br/>
			Name<input required type="text" name="name" placeholder="Full Name"><br/>
			Course<input required type="text" name="course" placeholder="Course"><br/>
			<input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Register">
		</form>
<?php
	}


	elseif (isset($_GET['cn'])) {
		?>
		<style type="text/css">
      body{
         width: 90%;
  height: 90vh;
  background-image: linear-gradient(rgba(0,0,0,0.75),rgba(0,0,0,0.75)),url(images/school.jpg);
  background-size: cover;
  background-position: center;
      }
      #box{
         border: 2px solid black;
         width: 400px;
      }
   	form input {
			    width: 528px;
			    height: 40px;
			    font-size: 21px;
			    font-family: Times New Roman;
			    padding-left: 15px;
			}
		</style>

		<b style="margin-left: 400px; font-size: 30px; color: red;">Courses</b>
		<form style="margin-left: 400px; width: 250px; color: white;" action="update_by_admin.php" method="POST">
			<input type="hidden" name="c_type" value="courses"><br/>
			Course<input required type="text" name="course" placeholder="Course"><br/>
			<input style="width: auto; margin-top: 10px;" type="submit" name="submit" value="Register">
		</form>
	<?php
	}
?>