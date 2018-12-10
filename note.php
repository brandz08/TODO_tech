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
		<div class="col-md-8 col-md-offset-2">
									<form action="process.php" method="POST">
												<input type="text" name="txttitle" class="form-control" placeholder="Title" required="required">
												 <textarea class="form-control" rows="15" name="note"></textarea>
												<button type="submit" name="btnnadd" class="btn btn-primary btn-block">Add Notes</button>
									</form>
		</div>
	</div>
	</div>
	</div>
	</div>



		<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>