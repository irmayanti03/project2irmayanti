<?php 
include('../config.php');

if(isset($_POST["idbrglaku"]))
	{
		$query = "SELECT * FROM tblbaranglaku WHERE idbrglaku = '".$_POST["idbrglaku"]."'";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($result);
		echo json_encode($row);
}

 ?>