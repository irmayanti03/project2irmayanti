<?php 
$servername = "localhost";
$database = "project2";
$username = "root";
$password = "";
// create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// cek connection
if(!$conn){
	die("connection failed:" . mysqli_connect_error());
 }

 ?>
