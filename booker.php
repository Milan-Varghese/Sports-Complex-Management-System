<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "tdatabase");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($link, $_REQUEST['lname']);
$emailid = mysqli_real_escape_string($link, $_REQUEST['emailid']);
$phno = mysqli_real_escape_string($link, $_REQUEST['phno']);
$tb = mysqli_real_escape_string($link, $_REQUEST['tb']);
$datte = mysqli_real_escape_string($link, $_REQUEST['datte']);
$fromtime = mysqli_real_escape_string($link, $_REQUEST['fromtime']);
$totime = mysqli_real_escape_string($link, $_REQUEST['totime']);
 
// Attempt insert query execution
$sql = "INSERT INTO bookings(fname,lname,emailid,phno,tb,datte,fromtime,totime) VALUES ('$fname', '$lname', '$emailid', '$phno', '$tb', '$datte', '$fromtime', '$totime');";
if(mysqli_query($link, $sql))
{
    echo "<script type='text/javascript'>alert('Booking done')</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>