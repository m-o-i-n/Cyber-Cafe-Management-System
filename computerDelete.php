<?php 

		require('connection.php'); 

	$i=$_REQUEST['id'];

	$sql="delete FROM tblcomputers where ID='$i'";
	
	if(mysqli_query($link,$sql))
		header("Location:computerDeails.php");

 ?>