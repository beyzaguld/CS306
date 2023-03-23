
<?php
include "config.php";
$search = $_POST['search'];
$column = $_POST['column'];


$sql = "select * from content where $column like '%$search%'";

$result = $db->query($sql);

?> 

<table width="70%" cellpadding="5" cellspace="5">

<tr>
    <td><strong>ID</strong></td>
    <td><strong>Name</strong></td>
    <td><strong>Genre</strong></td>
    <td><strong>Rating</strong></td>
</tr>

<?php while ($row = mysqli_fetch_assoc($result)) {?>
<tr>
    <td><?php echo $row['cid'];?></td>
    <td><?php echo $row['cname'];?></td>
    <td><?php echo $row['genre'];?></td>
    <td><?php echo $row['rating_sum'];?></td>
</tr>

<?php } ?>
</table>





