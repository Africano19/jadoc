<?php
session_start();
$host = "cp175.webserver.pt"; /* Host name */
$user = "jadocpt_teste"; /* User */
$password = "Jadoc2022!"; /* Password */
$dbname = "jadocpt_teste"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

?>