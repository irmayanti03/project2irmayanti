<?php 

require '../config.php';

	$request = $_GET;
	$id = $request['id'];
	
	$servername = "localhost";
    $database = "project2";
    $username = "root";
    $password = "";
    // create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    $query = "SELECT * FROM tblbarang WHERE idbrg = '".$id."'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	echo json_encode($row);


 ?>