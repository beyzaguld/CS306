<!DOCTYPE html>
<html>
<head>
	<title>Table</title>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>
<body>

<div align="center">

<table>

<tr> <th> ID </th> <th> MUSIC </th> <th>TYPE</th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM musics";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $id = $row['mid'];
  $music_name = $row['mname'];
  $music_type = $row['mtype'];

	echo "<tr>" . "<th>" . $id . "</th>" . "<th>" . $music_name . "</th>" . "<th>" . $music_type . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
</html>