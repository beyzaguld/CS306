<?php
    include "config.php";

    include "content_table.php";
?>
<form action="delete_content.php" method="GET">
<select name="ids">

<?php
$sql_command = "SELECT cid, cname, genre FROM content";
$myresult = mysqli_query($db, $sql_command);
    while($row = mysqli_fetch_assoc($myresult)) {
        $id = $row['cid'];
        $content_name = $row['cname'];
        $content_type = $row['ctype'];
        echo "<option value=$id>". $content_name . " - " . $content_type . "</option>";
    }


?>
</select>
<button>DELETE</button>
</form>