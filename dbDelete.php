<?php
	require_once('database.php');
	$id = $_GET['id'];
	$res = $database->delete($id);
	if($res)
	{
		echo '<script>alert ("Deleted Successfully");</script>';
     
	}
	else{
		echo '<script>alert ("Failed To Delete");</script>';
	}
?>