<?php
  include "connection_db.php";
  
  $id = $_GET["myid"];
  $name = $_GET["myname"];
  $course = $_GET["mycourse"];
  
  $query = "UPDATE enrolled SET name='$name', course='$course' WHERE id=$id";
  
  if(mysqli_query($connectivity, $query)){
    header('Location:enrolled.php');
  }
  else{
    echo "Record failed to update <br>". mysqli_error($connectivity);
  }
  
  mysqli_close($connectivity);
?>