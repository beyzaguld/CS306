<?php
    include "config.php";
    if(!empty($_GET['ids']))
    {
        $id = $_GET['ids'];
        $sql_statement = "DELETE FROM awards WHERE award_id = $id";
        $result = mysqli_query($db, $sql_statement);
        header ("Location: admin_award.php");

    }

    else
    {

	    echo "The form is not set.";

    }
?>