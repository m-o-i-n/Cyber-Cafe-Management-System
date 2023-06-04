<?php

require('connection.php');
$id = $_REQUEST['id'];
$vid = $id;
$sqll = "select*from tblcomputers where ID='$id'";
$det = mysqli_query($link, $sqll);
$col = mysqli_fetch_object($det);

if (isset($_REQUEST['submit'])) {
	$id = $_REQUEST['eid'];
	$bran = $_REQUEST['brand'];
	$ip = $_REQUEST['ip'];
	$loc = $_REQUEST['loc'];
	$date = $_REQUEST['date'];


	$sqll2 = "update tblcomputers set ComputerName ='$bran', ComputerLocation='$loc',IPAdd='$ip',EntryDate='$date' WHERE ID = '$id'";

	if (mysqli_query($link, $sqll2)) {
		header("location:computerDetails.php");
	}
}

?>
















<?php $page = "computer";
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
										<label class="form-label" for="eid"><!-- Model Name --></label>
										<input id="eid" class="form-control" type="hidden" name="eid" placeholder="Enter " value="<?php echo $col->ID; ?>">
									</div>




									<div class="mb-3">
										<label class="form-label" for="Model">IP Address</label>
										<input id="Model" class="form-control" type="text" name="ip" placeholder="Enter IP Address" value="<?php echo $col->IPAdd; ?>" required>
									</div>

									<div class="mb-3">
										<label class="form-label" for="Brands">Brand Name</label>
										<input id="Brands" class="form-control" type="text" name="brand" placeholder="Enter Brand Name" value="<?php echo $col->ComputerName; ?>" required>
									</div>

									<div class="mb-3">
										<label class="form-label" for="lo">Computer Location</label>
										<input id="lo" class="form-control" type="text" name="loc" placeholder="Enter Computer Location" value="<?php echo $col->ComputerLocation; ?>" required>
									</div>





									<div class="mb-3">
										<label class="form-label" for="dte">Date</label>
										<input id="dte" class="form-control" type="datetime-local" name="date" placeholder="Enter Date" value="<?php echo $col->EntryDate; ?>" required>
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