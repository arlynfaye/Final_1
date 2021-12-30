<?php
  include "connection_db.php";

  $name = $_GET["myname"];
  $course = $_GET["mycourse"];

  $query = "INSERT INTO enrolled(name, course)
            VALUE ('$name', '$course')";

  if(mysqli_query($connectivity, $query)){
  	echo "New record added succesfully";
}
else{
	echo "New record failed to add <br>". mysqli_error($connectivity);
}
mysqli_close($connectivity);
?>