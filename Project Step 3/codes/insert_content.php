<?php

include "config.php";

if (isset($_POST['cname']) && isset($_POST['genre']) && isset($_POST['rating_sum'])){

$content_name = $_POST['cname'];
$content_type = $_POST['genre'];
$content_rating = $_POST['rating_sum'];

echo $content_name . " " . $content_type . " " . $content_rating . "<br>";

$sql_statement = "INSERT INTO content(cname, genre, rating_sum)
					VALUES ('$content_name','$content_type', '$content_rating')";

$result = mysqli_query($db, $sql_statement);

header ("Location: index_content.php");

}

else
{

	echo "The form is not set.";

}
?>