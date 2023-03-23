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
	<title>MAIN PAGE</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.button2 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  } /* Blue */

div {
  border-radius: 5px;
  
  padding: 20px;
}
</style>


</head>
<body style="background-color:#E9E9E9;">
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
<b>Welcome to Content Table</b>
<br>
<br>
Here rows from Content Table: 
<br>
<br>

<?php 
include "content_table.php";
?>

<form action="insert_content.php" method="POST">
	<input type="text" id="fname" name="cname" placeholder="Type content name"><br>
  <input type="text" id="fname" name="genre" placeholder="Type content genre"><br>
  <input type="text" id="fname" name="rating_sum" placeholder="Type content rating"><br>
	<button class="btn btn-primary">INSERT</button>

</form>

<div class="col-lg-4 col-md-4 col-12">
  					
    					<a href="admin_content.php" class="btn btn-primary">Deletion Content Page</a>
  					
</div>
			<div class="col-lg-4 col-md-4 col-12">

  					
    					<a href="select_content.html" class="btn btn-primary">Selection Content</a>
  					

			</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>