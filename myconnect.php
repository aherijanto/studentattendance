<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database= "phbs";

// Create connection
$conn = mysql_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysql_error());
} 
echo "";

$db_found=mysql_select_db($database);
if ($db_found) {

print " ";
}
else {
print "Database NOT Found";
}
?>
