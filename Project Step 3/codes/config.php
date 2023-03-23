<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', '');
//define('DB_NAME', 'project_step2');
 
/* Attempt to connect to MySQL database */
$db = mysqli_connect('localhost', 'root', '', 'step3');
 
// Check connection
if($db->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}


?>