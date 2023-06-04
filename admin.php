<?php session_start(); ?>
<?php 
	require('connection.php'); 
	$detail=mysqli_query($link,"select * from tbladmin");
	$page="admin";

 ?>
<?php 
	require_once("header.php");
?>
	<main class="content mb-5">
				<div class="container-fluid= p-0">

					<h1 class="h3 mb-3 mis"><strong> Admin</strong> Credentials</h1>
					<div class="panel panel-primary">
						<div class="panel-heading " align="center">Admin Table</div>
						<div class="panel-body">
							<ul class="list-group">
								
								<div  id="block1">
									<li class="list-group-item">
										<div class="table-responsive">
											<table class="table" id="example">
												<thead>
													<tr><strong>
														<th>ID</th>
														<th>Admin Name</th>
														<th>Username</th>
														<th>Mobile Number</th>
														<th>Email</th>
														<th>AdminRegdate</th>
													</strong>
													</tr>
												</thead>
												<tbody>
													<?php
													   while($row=mysqli_fetch_assoc($detail))
												 			{  
												 				echo"<tr>";
												 				 if($row['ID'])
												 				 {
												 				 	$cid=$row['ID'];
												 				 }
	
												 				echo "<td>".$row['ID']."</td>";
												 				echo "<td>".$row['AdminName']."</td>";
												 				echo "<td>".$row['UserName']."</td>";
												 				echo "<td>".$row['MobileNumber']."</td>";
												 				echo "<td>".$row['Email']."</td>";
												 				echo "<td>".$row['AdminRegdate']."</td>";
												 			
												 				echo"</tr>";
												 				
												 			}
												 			?>
												</tbody>
											</table>
										</div>
									</li>
								</div>
							</ul>
						</div>
					</div>
			</main>				
<?php 
	require_once("footer.php");
?>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} )
</script>
