<?php
				include "includes/header.php";
				$data=[];

				$act = $_GET['act'];
				if($act == "edit") {
					$id = $_GET['id'];
					$volunteer = getById("volunteer", $id);
				}
				?>

				<form method="post" action="save.php" enctype='multipart/form-data'>
					<fieldset>
						<legend class="hidden-first">Add New Volunteer</legend>
						<input name="cat" type="hidden" value="volunteer">
						<input name="id" type="hidden" value="<?=$id?>">
						<input name="act" type="hidden" value="<?=$act?>">
				
							<label>Timestamp</label>
							<input class="form-control" type="text" name="timestamp" value="<?=$volunteer['timestamp']?>" /><br>
							
							<label>Name</label>
							<input class="form-control" type="text" name="name" value="<?=$volunteer['name']?>" /><br>
							
							<label>Email</label>
							<input class="form-control" type="text" name="email" value="<?=$volunteer['email']?>" /><br>
							
							<label>Phone</label>
							<input class="form-control" type="text" name="phone" value="<?=$volunteer['phone']?>" /><br>
							
							<label>Address</label>
							<input class="form-control" type="text" name="address" value="<?=$volunteer['address']?>" /><br>
							
							<label>Notes</label>
							<textarea class="ckeditor form-control" name="notes"><?=$volunteer['notes']?></textarea><br>
							<br>
					<input type="submit" value=" Save " class="btn btn-success">
					</form>
					<?php include "includes/footer.php";?>
				