<?php
$server="localhost";
$username="root";
$password="Kavin2628";
$databasename="library_management_db";

$conn = mysqli_connect($server, $username, $password);

$abc=mysqli_select_db($conn,$databasename);

if(!$abc)
{
	die("disconnect");
}
else
{
	//die ("successfull");
}
?>