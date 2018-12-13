<?php
	
	$staff_id = $_GET['id'];

	$sql = "DELETE FROM staff where staff_id=$staff_id";

	deleteSql($sql);

	header('Location:http://localhost/sakilamanagement/index.php?page=staff');

?>