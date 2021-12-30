<?php
  include "connection_db.php";
  
  $id = $_GET["myid"];
  $course = $_GET["mycourse"];
  
  $query = "UPDATE courses SET course='$course' WHERE id=$id";
  
  if(mysqli_query($connectivity, $query)){
    header('Location:course.php');
  }
  else{
    echo "Record failed to update <br>". mysqli_error($connectivity);
  }
  
  mysqli_close($connectivity);
?>