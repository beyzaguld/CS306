<?php
    include "config.php";

    include "award_table.php";
?>
<form action="delete_award.php" method="GET">
<select name="ids">

<?php
$sql_command = "SELECT award_id, category, years, award_name FROM awards";
$myresult = mysqli_query($db, $sql_command);
    while($row = mysqli_fetch_assoc($myresult)) {
        $id = $row['award_id'];
        $award_category = $row['category'];
        $award_year = $row['years'];
        $award_name = $row['award_name'];
        echo "<option value=$id>". $award_category . " - " . $award_year . " - " . $award_name . "</option>";
    }


?>
</select>
<button>DELETE</button>
</form>