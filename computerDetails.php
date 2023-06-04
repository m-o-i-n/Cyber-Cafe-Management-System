<?php session_start();
$page = "computer";

require('connection.php');
$detail = mysqli_query($link, "select*from tblcomputers");

?>
<?php require_once("header.php"); ?>
<main class="content ">

	<div class="container-fluid p-0">

		<h1 class="h3 mb-3 mis"><strong> Computer</strong> Details</h1>
		<div class="panel panel-primary">
			<div class="panel-heading " align="center">Computer</div>
			<div class="panel-body">
				<ul class="list-group">
					<div>
						<li class="list-group-item">
							<div class="table-responsive">
								<table class="table" id="example">
									<thead>
										<tr>
											<th>ID</th>
											<th>Brand</th>
											<th>Location</th>
											<th>Ip Address</th>
											<th>Entry Date</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<?php $c = 1;
											while ($row = mysqli_fetch_assoc($detail)) {
												echo "<tr>";
												if ($row['ID']) {
													$cid = $row['ID'];
												}
												echo "<td>" . $c . "</td>";
												echo "<td>" . $row['ComputerName'] . "</td>";
												echo "<td>" . $row['ComputerLocation'] . "</td>";
												echo "<td>" . $row['IPAdd'] . "</td>";
												echo "<td>" . $row['EntryDate'] . "</td>";

												echo "<td><a href='computerEdit.php?id=$cid' class='btn btn-dark'>Edit</a>&nbsp";
												echo "<a href='computerDelete.php?id=$cid' class='btn btn-dark'>Delete</a></td>";
												$c++;
												echo "</tr>";
											}
											?>
										</tr>
									</tbody>
								</table>
							</div>
						</li>
					</div>
				</ul>
			</div>
			<div class="panel-footer"><a class="btn btn-secondary" href="computerAdd.php">Add More</a></div>
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