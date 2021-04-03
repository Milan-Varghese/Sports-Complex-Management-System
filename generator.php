<?php

define("dbhost","localhost");

define("dbuser","root");//use your username of phpmyadmin

define("dbpass","");

define("dbname","tdatabase");//use your destination db name

$con=mysqli_connect(dbhost, dbuser, dbpass);//user the first word used in //define as well as for below.

$db=mysqli_select_db($con, dbname);
$query="SELECT * FROM timetable";
$sql=mysqli_query($con,$query);//if you want to show all the //columns, other wise u can use column names instead of * followed by ,)
echo '<tr>';
while($row=mysqli_fetch_array($sql))
{
echo "<span>".$row["datee"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["turf1"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["turf2"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["court1"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["court2"]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["court3"]."<br>";//like wise you can use //many columns.
}


?>