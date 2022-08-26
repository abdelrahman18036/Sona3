<?php
				include "includes/header.php";
				?>
				<a class="btn btn-primary" href="export-volunteer.php"> <i class="glyphicon glyphicon-plus-sign"></i>Export</a>

				<a class="btn btn-primary" href="edit-volunteer.php?act=add"> <i class="glyphicon glyphicon-plus-sign"></i> Add New Volunteer</a>

				<h1>Volunteer</h1>
				<p>This table includes <?php echo counting("volunteer", "id");?> volunteer.</p>

				<table id="sorted" class="table table-striped table-bordered">
				<thead>
				<tr>
							<th>Id</th>
			<th>Timestamp</th>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Address</th>
			<th>Notes</th>

				<th class="not">Edit</th>
				<th class="not">Delete</th>
				</tr>
				</thead>

				<?php
				$volunteer = getAll("volunteer");
				if($volunteer) foreach ($volunteer as $volunteers):
					?>
					<tr>
		<td><?php echo $volunteers['id']?></td>
		<td><?php echo $volunteers['timestamp']?></td>
		<td><?php echo $volunteers['name']?></td>
		<td><?php echo $volunteers['email']?></td>
		<td><?php echo $volunteers['phone']?></td>
		<td><?php echo $volunteers['address']?></td>
		<td><?php echo $volunteers['notes']?></td>


						<td><a href="edit-volunteer.php?act=edit&id=<?php echo $volunteers['id']?>"><i class="glyphicon glyphicon-edit"></i></a></td>
						<td><a href="save.php?act=delete&id=<?php echo $volunteers['id']?>&cat=volunteer" onclick="return navConfirm(this.href);"><i class="glyphicon glyphicon-trash"></i></a></td>
						</tr>
					<?php endforeach; ?>
					</table>
					<?php include "includes/footer.php";?>
				