<?php
    include "config.php";

    include "musics_table.php";
?>
<form action="delete_musics.php" method="GET">
<select name="ids">

<?php
$sql_command = "SELECT mid, mname, mtype FROM musics";
$myresult = mysqli_query($db, $sql_command);
    while($row = mysqli_fetch_assoc($myresult)) {
        $id = $row['mid'];
        $music_name = $row['mname'];
        $music_type = $row['mtype'];
        echo "<option value=$id>". $music_name . " - " . $music_type . "</option>";
    }


?>
</select>
<button>DELETE</button>
</form>