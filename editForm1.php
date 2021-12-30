<!DOCTYPE HTML>
<html>
<head>
	<title>PHP MySQL</title>
	<style type="text/css">
      body{
         background-image: url(images/school.jpg);
      }
      #box{
         border: 2px solid black;
         width: 400px;
      }
      h3{
         color: white;
      }
   </style>
</head>
<center>
<body style="margin-top: 200px;">
	 <div id="box">
   <h3>Edit Course</h3>
	<?php
		include "connection_db.php";
		$id = $_GET['id'];
		$query = "SELECT * FROM courses WHERE id=$id";
		$result = mysqli_query($connectivity, $query);
	?>
	<form action="editProcess1.php" method="get">
		<table>
		<?php
			while($row=mysqli_fetch_array($result)){
		?>
			<tr>
				<td> ID: </td>
				<td> <input type="text" name="myid" value="<?php echo $row['id'];?>" readonly> </td>
			</tr>
			<tr>
				<td> Course: </td>
				<td> 
					<textarea name="mycourse" rows="5" cols="20"><?php echo $row['course'];?></textarea>
				</td>
			</tr>
			<tr>
				<td> <input type="submit" name="save" value="Save Changed"> </td>
			</tr>
		<?php
			}
		?>
		</table>
	</form>
</center>
</body>
</html>