
<!DOCTYPE html>
<html>
<head>
	<title>List of Enrolled Students Page</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="styleEnroll.css" type="text/css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
	
</head>

<body style="background-color: black;">
	<div id="colorbody"></div>
<div></div>

<div id="wrap">

	<div id="header">
		<div class="background">
  <div class="transbox">
    <p style="padding-top: 40px; padding-bottom: 40px;">WELCOME BEARM'ians!</p>
  </div>
</div>
	</div>

	<nav>
<div class="container">
	<button><a href="student.php">Back</a></button>
	
</div>
</nav>
		
			
		<br>
         <div class="one"> The table below is the list of officially enrolled students.</div>
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
         

	<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4" style="background-color:#333333;">

  <!-- Footer Elements -->
  <div class="container">

  <div class="footer-copyright text-center py-3" align="center">Visit:
    <a href="https://www.facebook.com/Bearmi-University-107406318466750/">BAMuniveristy</a>
  </div>
</footer>
<!-- Footer -->
 </div>
   </div>
</div>
</body>
</html>