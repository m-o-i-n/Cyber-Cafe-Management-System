<?php session_start(); ?>

<?php 
	$page="profile";
	require_once("header.php");
?>
<main class=" content d-flex w-100 bg-dark">
		<div class="container d-flex flex-column">
			<div class="row vh-90">
				<div class="col-sm-10 col-md-5 col-lg-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
					<div class="card  rounded-3">
						<div class="card-body">
							<div class="m-sm-4">
								     <div class="col">
								     	<h1 align="center" class="ft-aero"><?php if(isset($_SESSION['adfname'])){echo $_SESSION['adfname']; } ?></h1>
								     	<img src="../attach/avatar/<?php if(isset($_SESSION['adimg'])){echo $_SESSION['adimg']; } ?>" class="col-12"></div>
								</div>
								
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

</body>
</html>
			<?php 
	require_once("footer.php");
?>