<?php 
include 'connection.php';
include 'navbar.php';

$sql ="SELECT * FROM `tbl_todo` WHERE `is_deleted`='1' ORDER BY date ASC";
$query = mysqli_query($conn,$sql);

$sqli ="SELECT * FROM `tbl_note` WHERE `is_deleted`='1' ORDER BY date DESC";
$queryy = mysqli_query($conn,$sqli);
?>

<!DOCTYPE html>
<html>
<head>
	<title>TODO</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
		<body>
		<div class="table-responsive container">

			<div class="panel panel-Primary">
		    <div class="panel-heading">Information</div>
		    <div class="panel-body">
		    
			<div class="row">
			<div class="col-md-6 col-md-offset-1">
					<?php
					$count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_todo"));
					?>
					<h1>To Do List (<?php echo $count; ?>)</h1>
							
					<table class="table table-hover">
						<thead><tr>
							<th>TODO</th>
							<th>Date</th>
							<th>ACTION</th>
						</tr></thead>

						<tbody>
						<?php while ($row = mysqli_fetch_assoc($query)) {?>
								<tr>
								
								<td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?php echo $row['todo']; ?></td>
								<td><?php echo $row['date']; ?></td>
								<td><a href="process.php?deleteid=<?php echo $row['todo_id']; ?>" onclick="return confirm('Are you you want to remove this from your list?' )"> DONE</a> || <a href="edit.php?editid=<?php echo $row['todo_id'];?>">UPDATE</a> || <input type="checkbox" name="check" value="checked" /> </td>

							</tr>
						<?php }?>
						</tbody>

					</table>
				</div>
				<div class="col-md-4 ">
					<?php
					$count = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tbl_note"));
					?>
					<h1>Notes List (<?php echo $count; ?>)</h1>
					<table class="table table-hover">
						<thead><tr>
							<th>TITLE</th>
							<th>ACTION</th>
						</tr></thead>

						<tbody>
							<?php while ($row = mysqli_fetch_assoc($queryy)) {?>
								
							<tr>
								<td style="word-wrap: break-word;min-width: 160px;max-width: 160px;"><?php echo $row['note']; ?></td>
								<td><a href="process.php?deletenid=<?php echo $row['note_id']; ?>" onclick="return confirm('Are you sure you want to delete this note?' )"> DONE</a> || <a href="editn.php?editnid=<?php echo $row['note_id'];?>">VIEW </td>

							</tr>
						<?php }?>
						</tbody>

					</table>	

				</div>
				</div>
				</div>
				</div>
		</div>
				<script type="text/javascript" src="js/bootstrap.js"></script>
		</body>
</html>