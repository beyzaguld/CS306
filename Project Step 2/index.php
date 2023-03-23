<!DOCTYPE html>
<html>
<head>
	<title>MAIN PAGE</title>

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
  background-color: #f2f2f2;
  padding: 20px;
}
</style>


</head>
<body>


<div align="center">
<b>Welcome to Musics Table</b>
<br>
<br>
Here rows from Musics Table: 
<br>
<br>

<?php 
include "musics_table.php";
?>

<form action="insertion_musics.php" method="POST">
	<input type="text" id="fname" name="mname" placeholder="Type music name"><br>
  <input type="text" id="fname" name="mtype" placeholder="Type music genre"><br>

	<button class="button2">SEND</button>
</form>
</div>
</body>
</html>