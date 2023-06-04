<?php session_start(); ?>
<?php
require('connection.php');
$id = $_REQUEST['id'];
echo "$id";


$sql = "delete FROM tblusers where ID='$id'";

if (mysqli_query($link, $sql))
	header("Location:userDetails.php");

?>