<!DOCTYPE html>
<html>
<head>
<style>
        #footer {
            position: fixed;
            padding: 10px 10px 0px 10px;
            bottom: 0;
            width: 100%;
            /* Height of the footer*/ 
            height: 40px;
            background: grey;
        }
    </style>
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

<tr> <th> ID </th> <th> CONTENT </th> <th>GENRE</th> <th>RATING</th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM content";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $id = $row['cid'];
  $content_name = $row['cname'];
  $content_type = $row['genre'];
  $content_rating = $row['rating_sum'] / $row['counterr'];
  echo "<tr>" . "<th>" . $id . "</th>" . "<th>" . $content_name . "</th>" . "<th>" . $content_type . "</th>" . "<th>" . $content_rating . "</th>" . "</tr>";
}

?>

</table>
</div>



</body>
</html>