
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dashboard</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="shortcut icon" href="attachments/img/icons/icon-48x48.png" />
	<link href="assets/css/app.css" rel="stylesheet">
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
	<link href="assets/css/jquery.dataTables.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/css.css">

	<style type="text/css">
		.sidebar-brand {
		    font-size: 2rem;
		}
		.sidebar-header{
		    font-size: 1rem;
		}
		a:hover
		{
			 text-decoration: none;
		}
	</style>
</head>

<body>
	<div class="wrapper">

<?php 
	require_once("sidebar.php");
?>
<div class="main ">
	<nav class="navbar navbar-expand navbar-light navbar-bg navbar-right">
		<a class="sidebar-toggle js-sidebar-toggle">
          <i class="hamburger align-self-center"></i>
        </a>
		<div class="navbar-collapse collapse col-xs-offset-8 col-md-offset-0" >
				<ul class="navbar-nav navbar-align navbar-right">
					<li class="nav-item dropdown ">
						<a class="nav-icon dropdown-toggle d-sm-none" href="#" data-bs-toggle="dropdown">
            				<i class="align-middle" data-feather="settings"></i>
          				
          					<a class="nav-link" href="logout.php">Logout</a>
						
					</li>
				</ul>
			</div>
	</nav>