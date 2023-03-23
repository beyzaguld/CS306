<?php
    include "config.php";
    if(!empty($_GET['ids']))
    {
        $id = $_GET['ids'];
        $sql_statement = "DELETE FROM content WHERE cid = $id";
        $result = mysqli_query($db, $sql_statement);
        header ("Location: admin_content.php");

    }

    else
    {

	    echo "The form is not set.";

    }
?>
