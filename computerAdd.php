<?php session_start(); ?>
<?php 
	require('connection.php'); 
	
	if(isset($_REQUEST['submit']))
	{
		$bran=$_REQUEST['brand'];
		$loc=$_REQUEST['loc'];
		$ip=$_REQUEST['ip'];
		$date=$_REQUEST['date'];
	 	
	$sql="insert into tblcomputers(ComputerName,ComputerLocation,IPAdd,EntryDate) values('$bran','$loc','$ip','$date')";
  

  if(mysqli_query($link,$sql))
  {
     
     header("location:computerDetails.php"); 
      
  }

	}
?>
<?php $page="helm";
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
								<form enctype="multipart/form-data">
										
									<div class="mb-3">
										<label class="form-label" for="Model">IP Address</label>
										<input id="Model"class="form-control" type="text" name="ip" placeholder="Enter IP Address" required>
									</div>
										
										<div class="mb-3">
										<label class="form-label" for="Brands">Brand Name</label>
										<input id="Brands"class="form-control" type="text" name="brand" placeholder="Enter Brand Name" required>
									</div>

										<div class="mb-3">
										<label class="form-label" for="lo">Computer Location</label>
										<input id="lo"class="form-control" type="text" name="loc" placeholder="Enter Computer Location" required>
									</div>





									<div class="mb-3">
										<label class="form-label" for="dte">Date</label>
										<input id="dte"class="form-control" type="datetime-local" name="date" placeholder="Enter Date" required>
									</div>
									
									
										<div class="text-center mt-3">
											<input type="submit" name="submit" value="Add" class="btn btn-info">
											
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>
	<?php include("footer.php"); ?>


   

