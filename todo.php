<?php 
include 'navbar.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Record</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>

	<div class="container">
	<div class="panel panel-Primary">
    <div class="panel-heading">TODO</div>
    <div class="panel-body">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
									<form action="process.php" method="POST">
												<input type="text" name="txttodo" class="form-control" placeholder="What to?" required="required">
												<input type="date" name="txtdate" class="form-control" required="required">
												<button type="submit" name="btnadd" class="btn btn-primary btn-block">Add Records</button>
									</form>
			</div>
	</div>	
	</div>
	</div>
	</div>


		<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>