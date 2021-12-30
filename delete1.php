<?php
  include "connection_db.php";

  $id = $_GET["id"];

  $query = "DELETE FROM courses WHERE id=$id";

  if (mysqli_query($connectivity, $query)) {
    header('Location:course.php');
  }
 else{
 	echo "Record failed to delete <br>".
 	mysqli_error($connectiviy);
 }
mysqli_close($connectivity);

?>