<?php

$search = $_POST['search'];
$column = $_POST['column'];

$servername = "localhost";
$username = "root";
$password = "";
$db = "project_step2";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error){
	die("Connection failed: ". $conn->connect_error);
}

$sql = "select * from musics where $column like '%$search%'";

$result = $conn->query($sql);

?> 

<table width="70%" cellpadding="5" cellspace="5">

<tr>
    <td><strong>ID</strong></td>
    <td><strong>Name</strong></td>
    <td><strong>Type</strong></td>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) {?>
<tr>
    <td><?php echo $row['mid'];?></td>
    <td><?php echo $row['mname'];?></td>
    <td><?php echo $row['mtype'];?></td>
</tr>
<?php } ?>
</table>