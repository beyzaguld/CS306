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
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  	<div class="container-fluid">
    <a class="navbar-brand" href="index.html">CS306 Term Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rate_content.html">Rate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contents.php">Contents</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="award_table.php">Awards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="musics_table.php">Musics</a>
        </li>
       
      </ul>
    </div>
 	</div>
	</nav>
<div align="center">

<table>

<tr> <th> ID </th> <th> CATEGORY </th> <th>YEAR</th> <th>AWARD NAME</th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM awards";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $id = $row['award_id'];
  $award_category = $row['category'];
  $award_year = $row['years'];
  $award_name = $row['award_name'];
  echo "<tr>" . "<th>" . $id . "</th>" . "<th>" . $award_category . "</th>" . "<th>" . $award_year . "</th>" . "<th>" . $award_name . "</th>" . "</tr>";
}

?>

</table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>