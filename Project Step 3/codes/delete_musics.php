<?php
    include "config.php";
    if(!empty($_GET['ids']))
    {
        $id = $_GET['ids'];
        $sql_statement = "DELETE FROM musics WHERE mid = $id";
        $result = mysqli_query($db, $sql_statement);
    
        header ("Location: admin_musics.php");

    }

    else
    {

	    echo "The form is not set.";

    }
?>
