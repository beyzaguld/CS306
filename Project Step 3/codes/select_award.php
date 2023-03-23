<?php
include "config.php";
$search = $_POST['search'];
$column = $_POST['column'];



$sql = "select * from awards where $column like '%$search%'";

$result = $db->query($sql);

?> 

<table width="70%" cellpadding="5" cellspace="5">

<tr>
    <td><strong>ID</strong></td>
    <td><strong>Category</strong></td>
    <td><strong>Year</strong></td>
    <td><strong>Name</strong></td>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) {?>
<tr>
    <td><?php echo $row['award_id'];?></td>
    <td><?php echo $row['category'];?></td>
    <td><?php echo $row['years'];?></td>
    <td><?php echo $row['award_name'];?></td>
</tr>

<?php } ?>
</table>