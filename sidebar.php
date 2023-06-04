<script type="text/javascript">
	const activepage = window.location.pathname;
	console.log(activepage)
</script>

<link rel="stylesheet" type="text/css" href="../css/new.css">
<nav id="sidebar" class="sidebar js-sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="admin.php">
			<span class="align-middle">
				<font size="3px" class="ft-aero">Admin Profile</font>
			</span>
		</a>
		<ul class="sidebar-nav">
			<li class="sidebar-header ">
				<font class="ft-aero" size="5px">Cyber Cafe Management System</font>
			</li>

			<hr>
			<li class="sidebar-item <?php if ($page == "dashboard") echo "active"; ?>">
				<a class="sidebar-link" href="dashboard.php">
					<i class="align-middle" data-feather="code"></i> <span class="align-middle">Dashboard</span>
				</a>
			</li>
			<li class="sidebar-item <?php if ($page == "computer") echo "active"; ?>">
				<a class="sidebar-link" href="computerDetails.php">
					<i class="align-middle" data-feather="code"></i> <span class="align-middle">Computer</span>
				</a>
			</li>

			<li class="sidebar-item <?php if ($page == "user") echo "active"; ?>">
				<a class="sidebar-link" href="userDetails.php">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">User</span>
				</a>
			</li>

			<li class="sidebar-item  <?php if ($page == "search") echo "active"; ?>">
				<a class="sidebar-link" href="search.php">
					<i class="align-middle" data-feather="cloud"></i> <span class="align-middle">search</span>
				</a>
			</li>

			<li class="sidebar-item ">
				<a class="sidebar-link" href="logout.php">
					<i class="align-middle" data-feather="lock"></i> <span class="align-middle">Logout</span>
				</a>
			</li>
		</ul>
	</div>
</nav>