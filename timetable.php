<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "tdatabase");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$datee1 = mysqli_real_escape_string($link, $_REQUEST['datee1']);
$turf11 = mysqli_real_escape_string($link, $_REQUEST['turf11']);
$turf21 = mysqli_real_escape_string($link, $_REQUEST['turf21']);
$court11 = mysqli_real_escape_string($link, $_REQUEST['court11']);
$court21 = mysqli_real_escape_string($link, $_REQUEST['court21']);
$court31 = mysqli_real_escape_string($link, $_REQUEST['court31']);

$datee2 = mysqli_real_escape_string($link, $_REQUEST['datee2']);
$turf12 = mysqli_real_escape_string($link, $_REQUEST['turf12']);
$turf22 = mysqli_real_escape_string($link, $_REQUEST['turf22']);
$court12 = mysqli_real_escape_string($link, $_REQUEST['court12']);
$court22 = mysqli_real_escape_string($link, $_REQUEST['court22']);
$court32 = mysqli_real_escape_string($link, $_REQUEST['court32']);

$datee3 = mysqli_real_escape_string($link, $_REQUEST['datee3']);
$turf13 = mysqli_real_escape_string($link, $_REQUEST['turf13']);
$turf23 = mysqli_real_escape_string($link, $_REQUEST['turf23']);
$court13 = mysqli_real_escape_string($link, $_REQUEST['court13']);
$court23 = mysqli_real_escape_string($link, $_REQUEST['court23']);
$court33 = mysqli_real_escape_string($link, $_REQUEST['court33']);

$datee4 = mysqli_real_escape_string($link, $_REQUEST['datee4']);
$turf14 = mysqli_real_escape_string($link, $_REQUEST['turf14']);
$turf24 = mysqli_real_escape_string($link, $_REQUEST['turf24']);
$court14 = mysqli_real_escape_string($link, $_REQUEST['court14']);
$court24 = mysqli_real_escape_string($link, $_REQUEST['court24']);
$court34 = mysqli_real_escape_string($link, $_REQUEST['court34']);

$datee5 = mysqli_real_escape_string($link, $_REQUEST['datee5']);
$turf15 = mysqli_real_escape_string($link, $_REQUEST['turf15']);
$turf25 = mysqli_real_escape_string($link, $_REQUEST['turf25']);
$court15 = mysqli_real_escape_string($link, $_REQUEST['court15']);
$court25 = mysqli_real_escape_string($link, $_REQUEST['court25']);
$court35 = mysqli_real_escape_string($link, $_REQUEST['court35']);
// Attempt insert query execution
$sql = "INSERT INTO timetable(datee,turf1,turf2,court1,court2,court3) VALUES ('$datee1','$turf11','$turf21','$court11','$court21','$court31'),('$datee2','$turf12','$turf22','$court12','$court22','$court32'),('$datee3','$turf13','$turf23','$court13','$court23','$court33'),('$datee4','$turf14','$turf24','$court14','$court24','$court34'),('$datee5','$turf15','$turf25','$court15','$court25','$court35');";
if(mysqli_query($link, $sql))
{
    echo "<script type='text/javascript'>alert('Time table made')</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
include 'generator.php';
// Close connection
mysqli_close($link);
?>