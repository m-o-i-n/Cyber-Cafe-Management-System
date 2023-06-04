<?php session_start(); ?>
<?php
require('connection.php');
$detail = mysqli_query($link, "select*from tblusers");
$page = "user";
?>
<?php
require_once("header.php");
?>
<main class="content mb-5">
	<div class="container-fluid= p-0">

		<h1 class="h3 mb-3 mis"><strong> User </strong> Credentials</h1>
		<div class="panel panel-primary">
			<div class="panel-heading " align="center">User Table</div>
			<div class="panel-body">
				<ul class="list-group">

					<div id="block1">
						<li class="list-group-item">
							<div class="table-responsive">
								<table class="table" id="example">
									<thead>
										<tr><strong>
												<th>S.no</th>
												<th>EntryId</th>
												<th>UserName</th>
												<th>Address</th>
												<th>Mobile No</th>
												<th>Email</th>
												<th>Computer</th>
												<th>Id Proof</th>
												<th>In Time</th>
												<th>Ou Time</th>
												<th>Fees</th>
												<th>Remark</th>
												<th>Status</th>
												<th>UpdationDate</th>
											</strong>
										</tr>
									</thead>
									<tbody>
										<?php $c = 1;
										while ($row = mysqli_fetch_assoc($detail)) {
											echo "<tr>";
											if ($row['ID']) {
												$cid = $row['ID'];
											}
											echo "<td>" . $c . "</td>";
											echo "<td>" . $row['EntryID'] . "</td>";
											echo "<td>" . $row['UserName'] . "</td>";
											echo "<td>" . $row['UserAddress'] . "</td>";
											echo "<td>" . $row['MobileNumber'] . "</td>";
											echo "<td>" . $row['Email'] . "</td>";

											echo "<td>" . $row['ComputerName'] . "</td>";

											echo "<td>" . $row['IDProof'] . "</td>";

											echo "<td>" . $row['InTime'] . "</td>";

											echo "<td>" . $row['OutTime'] . "</td>";

											echo "<td>" . $row['Fees'] . "</td>";

											echo "<td>" . $row['Remark'] . "</td>";

											echo "<td>" . $row['Status'] . "</td>";

											echo "<td>" . $row['UpdationDate'] . "</td>";

											echo "<td><a href='useredit.php?id=$cid' class='btn btn-dark'>Edit</a>&nbsp";
											echo "<a href='userDelete.php?id=$cid' class='btn btn-dark'>Delete</a></td>";
											$c++;
											echo "</tr>";
										}
										?>
									</tbody>
								</table>
							</div>
						</li>
					</div>
				</ul>
			</div>
			<div class="panel-footer"><a class=" btn btn-dark text-white" href="userAdd.php">Add User</a></div>
		</div>
</main>
<?php
require_once("footer.php");
?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	})
</script>