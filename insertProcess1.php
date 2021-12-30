<?php
  include "connection_db.php";

  $course = $_GET["mycourse"];

  $query = "INSERT INTO courses(course)
            VALUE ('$course')";

  if(mysqli_query($connectivity, $query)){
  	echo "New course added succesfully";
}
else{
	echo "New course failed to add <br>". mysqli_error($connectivity);
}
mysqli_close($connectivity);
?>