<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', ' sql8.freesqldatabase.com');
define('DB_USERNAME', 'sql8527701');
define('DB_PASSWORD', 'uctBWU35RY');
define('DB_NAME', 'sql8527701');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
