<?php

include "config.php";

if (isset($_POST['mname']) && isset($_POST['mtype'])){

$music_name = $_POST['mname'];
$music_type = $_POST['mtype'];

echo $music_name . " " . $music_type . "<br>";

$sql_statement = "INSERT INTO musics(mname, mtype)
					VALUES ('$music_name','$music_type')";

$result = mysqli_query($db, $sql_statement);

header ("Location: index_musics.php");

}

else
{

	echo "The form is not set.";

}
?>