<?php 
include 'connection.php';
include 'navbar.php';
if(isset($_GET['editnid']))	
{
	$id = cleanInput($_GET['editnid']);
	$sql = "SELECT * FROM `tbl_note` WHERE `note_id` = '$id'";
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
			<div class="col-md-8 col-md-offset-2">
									<form action="process.php" method="POST" enctype="multipart/form-data">
												<input type="hidden" name="txtnid" class="form-control" value="<?php echo $row['note_id']?>">
												<input type="text" name="txtnote" class="form-control" value="<?php echo $row['note']?>">

												<textarea class="form-control" rows="15" name="note" ><?php echo $row['title']?></textarea>
												<button type="submit" name="btnnUpdate" class="btn btn-primary btn-block">Update Record</button>		
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