<?php 
include 'connection.php';
include 'navbar.php';
if(isset($_GET['editid']))	
{
	$id = cleanInput($_GET['editid']);
	$sql = "SELECT * FROM `tbl_todo` WHERE `todo_id` = '$id'";
	$query = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($query);
}

function cleanInput($input)
{

	$data = stripslashes(strip_tags(trim($input)));
	return $data;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Record</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>
	<div class="container">
	<div class="panel panel-Primary">
    <div class="panel-heading">TODO</div>
    <div class="panel-body">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
									<form action="process.php" method="POST" enctype="multipart/form-data">
												<input type="hidden" name="txtid" class="form-control" value="<?php echo $row['todo_id']?>">
												<input type="text" name="txttodo" class="form-control" value="<?php echo $row['todo']?>">
												<input type="date" name="txtdate" class="form-control"  value="<?php echo $row['date']?>">
												<button type="submit" name="btnUpdate" class="btn btn-primary btn-block">Update Record</button>		
									</form>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
		<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>