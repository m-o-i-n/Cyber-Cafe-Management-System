<?php session_start();
$page = "dashboard";

require('connection.php');
$data1 = mysqli_query($link, "select count(*) as computers from tblcomputers");
$data2 = mysqli_query($link, "select count(*) as users from tblusers");
$row=mysqli_fetch_assoc($data1);
$computers=$row['computers'];
$row=mysqli_fetch_assoc($data2);
$users=$row['users'];
?>
<?php require_once("header.php"); ?>
<main class="content">

	<div class="container-fluid p-0">
		<h1 class="h3 mb-3 mis"><strong>Dashboard</strong></h1>
		<div class="cards">
			<div class="cards-single">
				<div>
					<h1><?php echo $computers; ?></h1>
					<span>Computers</span>
				</div>
				<div>
					<span class="las la-desktop"></span>
				</div>
			</div>
			<div class="cards-single">
				<div>
					<h1><?php echo $users; ?></h1>
					<span>Users</span>
				</div>
				<div>
					<span class="las la-users"></span>
				</div>
			</div>
		</div>
</main>

<?php
require_once("footer.php");
?>