<?php session_start(); ?>
<?php 
     require('connection.php'); 
		$id=$_REQUEST['id'];
		$vid=$id;	
	$sqll="select*from tblusers where ID='$id'";
	$det=mysqli_query($link,$sqll);
	$col=mysqli_fetch_object($det);

if(isset($_REQUEST['up']))

{ 	

	$a15=$_REQUEST['eid'];
    $a1=$_REQUEST['entry'];
    $a2=$_REQUEST['user'];
    $a3=$_REQUEST['address'];
    $a4=$_REQUEST['mobile'];
    $a5=$_REQUEST['email'];
    $a6=$_REQUEST['computer'];
    $a7=$_REQUEST['pr'];
    $a8=$_REQUEST['intime'];
    $a9=$_REQUEST['outtime'];
    $a10=$_REQUEST['fees'];
    $a11=$_REQUEST['remark'];

   
 if($a9=="")
 {
 	$a12="In";
 }
 else
 {
 	$a12="Out";
 }
  if($a9=="")
 {
 	$a13="";
 }
 else
 {
 	$a13=$a9;
 }

  $sqll2="update tblusers set EntryID='$a1',UserName='$a2',UserAddress='$a3',MobileNumber='$a4',
  		Email='$a5',ComputerName='$a6',IDProof='$a7',InTime='$a8',OutTime='$a9',Fees='$a10',Remark='$a11',Status='$a12',UpdationDate='$a13' where ID='$a15'";

  if(mysqli_query($link,$sqll2))
  {
      
      header("location:userDetails.php");

   }


  }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Edit User</title>
	<link rel="shortcut icon" href="images/icon-48x48.png" />
</head>

<body>
	<?php $page="user"; require("header.php");?>
	<main class=" content d-flex w-100 bg-dark">
		<div class="container d-flex flex-column">
			<div class="row vh-90">
				<div class="col-sm-10 col-md-5 col-lg-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
					<div class="card  rounded-3">
						<div class="card-body">
							<div class="m-sm-4">
								<form>
									<div class="mb-3">
										
										<input id="cid"class="form-control" type="text" name="eid" placeholder="Enter User first name" value="<?php 
										echo"$col->ID" ?>"  readonly >
									</div>

									<div class="mb-3">
										<label class="form-label" for="ent">EntryID</label>
										<input id="ent"class="form-control" type="text" name="entry" placeholder="Enter EntryID" value="<?php echo"$col->EntryID" ?>" required>
									</div>

										<div class="mb-3">
										<label class="form-label" for="un">User Name</label>
										<input id="un"class="form-control" type="text" name="user" placeholder="Enter Username"
										value="<?php echo"$col->UserName" ?>"
										 required>
									</div>

											<div class="mb-3">
										<label class="form-label" for="ad">Address</label>
										<input id="ad"class="form-control" type="text" name="address" placeholder="Enter Mobile Number"
										value="<?php echo"$col->UserAddress" ?>"
										 required>
									</div>


										<div class="mb-3">
										<label class="form-label" for="mo">Mobile No</label>
										<input id="mo"class="form-control" type="text" name="mobile" placeholder="Enter Mobile Number"
										value="<?php echo"$col->MobileNumber" ?>"
										 required>
									</div>


										<div class="mb-3">
										<label class="form-label" for="em">Email</label>
										<input id="em"class="form-control" type="Email" name="email" placeholder="Enter Email"
										value="<?php echo"$col->Email"; ?>"
										 required>
									</div>


										<div class="mb-3">
										<label class="form-label" for="comp">ComputerName</label>
										<input id="comp"class="form-control" type="text" name="computer" placeholder="Enter Computer Name"
										value="<?php echo"$col->ComputerName" ?>"
										 required>
									</div>


										<div class="mb-3">
										<label class="form-label" for="proof">Id Proof</label>
										<input id="proof"class="form-control" type="text" name="pr" placeholder="Enter Id Proof Number"
										value="<?php echo"$col->IDProof" ?>"
										 required>
									</div>


										<div class="mb-3">
										<label class="form-label" for="in">In Time</label>
										<input id="in"class="form-control" type="datetime-local" name="intime" placeholder="Enter Intime"
										value="<?php echo"$col->InTime" ?>"
										 required>
									</div>


										<div class="mb-3">
										<label class="form-label" for="out">Out Time</label>
										<input id="out"class="form-control" type="datetime-local" name="outtime" placeholder="Enter OutTime"
										value="<?php echo"$col->OutTime" ?>"
										 required>
									</div>


										<div class="mb-3">
										<label class="form-label" for="fe">Fees</label>
										<input id="fe"class="form-control" type="text" name="fees" placeholder="Enter Fees"
										value="<?php echo"$col->Fees" ?>"
										 required>
									</div>


										<div class="mb-3">
										<label class="form-label" for="re">Remark</label>
										<input id="re"class="form-control" type="text" name="remark" placeholder="Enter Remark"
										value="<?php echo"$col->Remark" ?>"
										 required>
									</div>


										<div class="mb-3">
										<label class="form-label" for="stat">Status</label>
										<input id="stat"class="form-control" type="text" name="status" placeholder="Enter Status"
										value="<?php echo"$col->Status" ?>"
										 required>
									</div>


										<div class="mb-3">
										<label class="form-label" for="apas">Pass</label>
										<input id="apas"class="form-control" type="text" name="email" placeholder="Enter User Password"
										value="<?php echo"$col->OutTime" ?>"
										 required>
									</div>
										<div class="text-center mt-3">
											<input type="submit" name="up" value="Update" class="btn btn-info">
											
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
</body>

</html>
