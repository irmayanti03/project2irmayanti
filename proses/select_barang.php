<?php 
include('../config.php');

if(isset($_POST["idbrg"]))
	{
		$query = "SELECT * FROM tblbarang WHERE idbrg = '".$_POST["idbrg"]."'";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($result);
		echo json_encode($row);
}

 ?>