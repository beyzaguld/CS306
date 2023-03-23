<?php

include "config.php";

if (isset($_POST['category']) && isset($_POST['years']) && isset($_POST['award_name'])){

$award_category = $_POST['category'];
$award_year = $_POST['years'];
$award_name = $_POST['award_name'];

echo $award_category . " " . $award_year . " " . $award_name . "<br>";

$sql_statement = "INSERT INTO awards(category, years, award_name)
					VALUES ('$award_category','$award_year', '$award_name')";

$result = mysqli_query($db, $sql_statement);

header ("Location: index_award.php");

}

else
{

	echo "The form is not set.";

}
?>