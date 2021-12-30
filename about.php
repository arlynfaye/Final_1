<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>List of enrolled student</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script type='text/javascript' src='js/mobile.js'></script>
</head>
<body>
	<div id="header">
		<h1><a href="index.html">BEARMI UNIVERSITY <span>List of officially enrolled student</span></a></h1>
		<ul id="navigation">
			<li>
				<a href="pageEnrolled.html">Bearmi</a>
			</li>
			<li class="current">
				<a href="about.php">List</a>
			</li>
			<li>
				<a href="portfolio.html">Porfolio</a>
			</li>
			<li>
				<a href="student.php">Back</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<h2>List of Officially Enrolled Students</h2>
		<div style="overflow-x:auto;">
			<br>
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
    </div>
   <br>
			
		</div>
		
		
	</div>
	<div id="footer">
		<div>
			<span> Bearmi University, Philippines | 09654576548</span>
			<p>
				&copy; BEARMI UNIVERSITY 
			</p>
		</div>
	</div>
</body>
</html>