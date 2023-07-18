<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Form Example</title>
	<!-- Bootstrap CSS -->
    <?php include 'links.php' ?>
	
</head>
<body>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<h2 class="mb-4 text-center">Add Role</h2>
				<form>
					<div class="mb-3">
						<label for="roleID" class="form-label">Role ID :</label>
						<input type="text" class="form-control" id="roleID" placeholder="Enter Role ID" required>
					</div>
					<div class="mb-3">
						
                            <label for="roleName" class="form-label">Role Name :</label>
                            <input type="text" class="form-control" id="roleName" placeholder="Enter Role Name" required>				
					</div>
					
					<div class="d-grid gap-2 mt-4">
						<button type="submit" class="btn btn-primary">Add</button>
						<button type="button" class="btn btn-danger">Cancel</button>
					</div>

				</form>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	
</body>
</html>
