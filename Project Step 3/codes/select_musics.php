<?php
include "config.php";
$search = $_POST['search'];
$column = $_POST['column'];



$sql = "select * from musics where $column like '%$search%'";

$result = $db->query($sql);

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





