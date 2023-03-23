<?php
include "config.php";


if (isset($_POST['edit'])) {

    $id = $_POST['id'];
    $rate = $_POST['rate'];


    $sql = "UPDATE content SET rating_sum = rating_sum +'".$rate."',counterr=counterr+1 WHERE cid='".$id."'";
    
    if (mysqli_query($db, $sql)) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($db);
      }

    header('Location: rate_content.html' );
}

else
{

	echo "The form is not set.";

}
?>